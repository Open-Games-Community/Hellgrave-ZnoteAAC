<?php if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0") { require_once 'login.php'; die(); } // Client 11 loginWebService
require_once 'engine/init.php'; include 'layout/overall/header.php';

// Front page server information box by Raggaer. Improved by Znote. (Using cache system and Znote SQL functions)
// Create a cache system
$infoCache = new Cache('engine/cache/serverInfo');
$infoCache->setExpiration(60); // This will be a short cache (60 seconds)
if ($infoCache->hasExpired()) {

    // Fetch data from database
    $data = array(
        'newPlayer' => mysql_select_single("SELECT `name` FROM `players` ORDER BY `id` DESC LIMIT 1"),
        'bestPlayer' => mysql_select_single("SELECT `name`, `level` FROM `players` ORDER BY `experience` DESC LIMIT 1"),
        'playerCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `players`"),
        'accountCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `accounts`"),
        'guildCount' => mysql_select_single("SELECT COUNT(`id`) as `count` FROM `guilds`")
    );

    // Initiate default values where needed
    if ($data['playerCount'] !== false && $data['playerCount']['count'] > 0) $data['playerCount'] = $data['playerCount']['count'];
    else $data['playerCount'] = 0;
    if ($data['accountCount'] !== false && $data['accountCount']['count'] > 0) $data['accountCount'] = $data['accountCount']['count'];
    else $data['accountCount'] = 0;
    if ($data['guildCount'] !== false && $data['guildCount']['count'] > 0) $data['guildCount'] = $data['guildCount']['count'];
    else $data['guildCount'] = 0;

    // Store data to cache
    $infoCache->setContent($data);
    $infoCache->save();
} else {
    // Load data from cache
    $data = $infoCache->load();
}
?>

<!-- Render HTML for server information -->
<div class="block-title">Server Information</div>
			
			<div style="border: 1px solid gray;text-align:center"><br></br>
<p>
            Welcome to our newest player:
                <a style="font-size:16px" href="characterprofile.php?name=<?php echo $data['newPlayer']['name']; ?>">
                    <?php echo $data['newPlayer']['name']; ?>
                </a>
            
</p>
    <p>
            We have <b style="font-size:16px"><?php echo $data['accountCount']; ?></b> accounts in our database, <b style="font-size:16px"><?php echo $data['playerCount']; ?></b> players, and <b style="font-size:16px"><?php echo $data['guildCount']; ?></b> guilds 
        </p>
         <p>  The best player is:<br></br>
			<?php
            $cache = new Cache('engine/cache/topPlayer_home');
            if ($cache->hasExpired()) {
                $players = mysql_select_multi('SELECT `name`, `level`, `experience`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 1;');
                $cache->setContent($players);
                $cache->save();
            } else {
                $players = $cache->load();
            }
            if ($players) {
            $count = 1;
            foreach($players as $player) {
            echo '<img style="margin-top: -35px; margin-left: -35px;" src="https://outfit-images.ots.me/1285_walk_animation/animoutfit.php?id='.$player['looktype'].'&addons='.$player['lookaddons'].'&head='.$player['lookhead'].'&body='.$player['lookbody'].'&legs='.$player['looklegs'].'&feet='.$player['lookfeet'].'&g=0&h=3&i=1"></img> <a href="characterprofile.php?name='.$player['name'].'" style="color:white;font-size:10px"></a></strong><br>';
           $count++;
            }
            }
            ?></p><br>
                <a style="font-size:16px" href="characterprofile.php?name=<?php echo $data['bestPlayer']['name']; ?>">
                    <?php echo $data['bestPlayer']['name']; ?>
                </a> level:<b style="font-size:16px"> <?php echo $data['bestPlayer']['level']; ?></b> congratulations!
            
        </p><br></br></div>
		<br></br>										

<?php	if (!isset($_GET['page'])) {
		$page = 0;
	} else {
		$page = (int)$_GET['page'];
	}
	$view = (isset($_GET['view'])) ? urlencode($_GET['view']) : "";

	if ($config['allowSubPages'] && file_exists("layout/sub/index.php")) include 'layout/sub/index.php';
	else {
		if ($config['UseChangelogTicker']) {
			//////////////////////
			// Changelog ticker //
			// Load from cache
			$changelogCache = new Cache('engine/cache/changelog');
			$changelogs = $changelogCache->load();

			if (isset($changelogs) && !empty($changelogs) && $changelogs !== false) {
				?>
				<table id="changelogTable">
					<tr class="yellow">
						<td colspan="2">Latest Changelog Updates (<a href="changelog.php">Click here to see full changelog</a>)</td>
					</tr>
					<?php
					for ($i = 0; $i < count($changelogs) && $i < 5; $i++) {
						?>
						<tr>
							<td><?php echo getClock($changelogs[$i]['time'], true, true); ?></td>
							<td><?php echo $changelogs[$i]['text']; ?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php
			} else echo "No changelogs submitted.";
		}
		
		$cache = new Cache('engine/cache/news');
		if ($cache->hasExpired()) {
			$news = fetchAllNews();
			$cache->setContent($news);
			$cache->save();
		} else {
			$news = $cache->load();
		}

		// Design and present the list
		if ($news) {

			$total_news = count($news);
			$row_news = $total_news / $config['news_per_page'];
			$page_amount = ceil($total_news / $config['news_per_page']);
			$current = $config['news_per_page'] * $page;

			function TransformToBBCode($string) {
				$tags = array(
					'[center]{$1}[/center]' => '<center>$1</center>',
					'[b]{$1}[/b]' => '<b>$1</b>',
					'[size={$1}]{$2}[/size]' => '<font size="$1">$2</font>',
					'[img]{$1}[/img]'    => '<a href="$1" target="_BLANK"><img src="$1" alt="image" style="width: 100%"></a>',
					'[link]{$1}[/link]'    => '<a href="$1">$1</a>',
					'[link={$1}]{$2}[/link]'   => '<a href="$1" target="_BLANK">$2</a>',
					'[color={$1}]{$2}[/color]' => '<font color="$1">$2</font>',
					'[*]{$1}[/*]' => '<li>$1</li>',
					'[youtube]{$1}[/youtube]' => '<div class="youtube"><div class="aspectratio"><iframe src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe></div></div>',
				);
				foreach ($tags as $tag => $value) {
					$code = preg_replace('/placeholder([0-9]+)/', '(.*?)', preg_quote(preg_replace('/\{\$([0-9]+)\}/', 'placeholder$1', $tag), '/'));
					$string = preg_replace('/'.$code.'/i', $value, $string);
				}
				return $string;
			}

			if ($view !== "") { // We want to view a specific news post
				$si = false;
				if (ctype_digit($view) === false) {
					for ($i = 0; $i < count($news); $i++) if ($view === urlencode($news[$i]['title'])) $si = $i;
				} else {
					for ($i = 0; $i < count($news); $i++) if ((int)$view === (int)$news[$i]['id']) $si = $i;
				}

				if ($si !== false) {
					?>
					<table id="news">
						<tr class="yellow">
							<td class="zheadline"><?php echo '<a href="?view='.$news[$si]['id'].'">[#'.$news[$si]['id'].']</a> '. getClock($news[$si]['date'], true) .' by <a href="characterprofile.php?name='. $news[$si]['name'] .'">'. $news[$si]['name'] .'</a> - <b>'. TransformToBBCode($news[$si]['title']) .'</b>'; ?></td>
						</tr>
						<tr>
							<td>
								<p><?php echo TransformToBBCode(nl2br($news[$si]['text'])); ?></p>
							</td>
						</tr>
					</table>
					<?php
				} else {
					?>
					<table id="news">
						<tr class="yellow">
							<td class="zheadline">News post not found.</td>
						</tr>
						<tr>
							<td>
								<p>We failed to find the post you where looking for.</p>
							</td>
						</tr>
					</table>
					<?php
				}

			} else { // We want to view latest news or a page of news.

				for ($i = $current; $i < $current + $config['news_per_page']; $i++) {
					if (isset($news[$i])) {
						?>
						<table id="news">
							<tr class="yellow">
								<td class="zheadline"><?php echo '<a href="?view='.urlencode($news[$i]['title']).'">'.getClock($news[$i]['date'], true).'</a> by <a href="characterprofile.php?name='. $news[$i]['name'] .'">'. $news[$i]['name'] .'</a> - <b>'. TransformToBBCode($news[$i]['title']) .'</b>'; ?></td>
							</tr>
							<tr>
								<td>
									<p><?php echo TransformToBBCode(nl2br($news[$i]['text'])); ?></p>
								</td>
							</tr>
						</table>
						<?php
					}
				}

				echo '<select name="newspage" onchange="location = this.options[this.selectedIndex].value;">';

				for ($i = 0; $i < $page_amount; $i++) {

					if ($i == $page) {

						echo '<option value="index.php?page='.$i.'" selected>Page '.$i.'</option>';

					} else {

						echo '<option value="index.php?page='.$i.'">Page '.$i.'</option>';
					}
				}

				echo '</select>';

			}

		} else {
			echo '<p>No news exist.</p>';
		}
	}
include 'layout/overall/footer.php'; ?>
