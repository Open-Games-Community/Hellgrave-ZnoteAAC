<?php
	if (!defined('ZNOTE_OS')) {
		$isWindows = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN');
		define('ZNOTE_OS', ($isWindows) ? 'WINDOWS' : 'LINUX');
	}

	// Si quieren usar el items.php aqui lo pueden probar
	$config['items'] = true;

	// Opciones disponibles: TFS_02, TFS_03, OTHIRE, TFS_10
	// OTHire = OTHIRE
	// TFS 0.2 = TFS_02
	// TFS 0.3 = TFS_03 (Si estas usando 0.3.6, pon $config['salt'] en false)!
	// TFS 0.4 = TFS_03
	// TFS 1.x = TFS_10 (Version de Hellgrave Server - desarrollo)
	$config['ServerEngine'] = 'TFS_10';
	// Por lo que sabemos OTX esta basado en TFS_03, estes seguro que eliges el TFS correcto: TFS_03
	$config['CustomVersion'] = false;

	$config['site_title'] = 'Hellgrave';
	$config['site_title_context'] = 'Mmorpg custom tibia server';
	$config['site_url'] = "";
	
	// Direccion de tu carpeta de Servidor "/" (o en raros casos la barra del otro sentido "\") y sobretodo al final de la direccion, ex: C:/Users/Username/Documents/GitHub/Hellgrave/
	$config['server_path'] = '';

	// ------------------------ \\
	// CONEXION MYSQL \\

	// ------------------------ \\
	// Usuario PhpMyAdmin - No utilizar root
	$config['sqlUser'] = 'USUARIO';

	// Contraseña PhpMyAdmin
	$config['sqlPassword'] = 'PASSWORD';

	// Nombre de la base de datos PhpMyAdmin
	$config['sqlDatabase'] = 'BASE DE DATOS';

	// Direccion del HOST, en caso es 127.0.0.1, en raros casos se pone localhost
	$config['sqlHost'] = '127.0.0.1';

	// QR Codigo, funcional unicamente para TFS 1.2+
	$config['twoFactorAuthenticator'] = false;
	// Podeis utilizar la applicacion "authy" en los mobiles

	/* Funcion de Hora
		- getClock() = returns current time in numbers.
		- getClock(time(), true) = returns current time in formatted date
		- getClock(false, true) = same as above
		- getClock(false, true, false) = get current time, don't adjust timezone
		- echo getClock($profile_data['lastlogin'], true); = from characterprofile,
		explains when user was last logged in. */
	function getClock($time = false, $format = false, $adjust = true) {
		if ($time === false) $time = time();
		// Date string representation
		$date = "d F Y (H:i)"; // 15 July 2013 (13:50)
		if ($adjust) $adjust = (1 * 3600); // Adjust to fit your timezone.
		else $adjust = 0;
		if ($format) return date($date, $time+$adjust);
		else return $time+$adjust;
	}

	// ------------------- \\
	// Configuraciones extras del servidor \\
	// ------------------- \\
	// Activar las quests ( Hellgrave no funcional de momento )
	$config['EnableQuests'] = false;

	// array for filling questlog (Questid, max value, name, end of the quest fill 1 for the last part 0 for all others)
	$config['quests'] = array(
		array(1501,100,"Killing in the Name of",0),
		array(1502,150,"Killing in the Name of",0),
		array(65001,100,"Killing in the Name of",0),
		array(65002,150,"Killing in the Name of",0),
		array(65003,300,"Killing in the Name of",0),
		array(65004,3,"Killing in the Name of",0),
		array(65005,300,"Killing in the Name of",0),
		array(65006,150,"Killing in the Name of",0),
		array(65007,200,"Killing in the Name of",0),
		array(65008,300,"Killing in the Name of",0),
		array(65009,300,"Killing in the Name of",0),
		array(65010,300,"Killing in the Name of",0),
		array(65011,300,"Killing in the Name of",0),
		array(65012,300,"Killing in the Name of",0),
		array(65013,300,"Killing in the Name of",0),
		array(65014,300,"Killing in the Name of",1),
		array(12110,2,"The Inquisition",0),
		array(12111,7,"The Inquisition",0),
		array(12112,3,"The Inquisition",0),
		array(12113,6,"The Inquisition",0),
		array(12114,3,"The Inquisition",0),
		array(12115,3,"The Inquisition",0),
		array(12116,3,"The Inquisition",0),
		array(12117,5,"The Inquisition",1),
		array(330,3,"Sam's Old Backpack",1),
		array(12121,3,"The Ape City",0),
		array(12122,5,"The Ape City",0),
		array(12123,3,"The Ape City",0),
		array(12124,3,"The Ape City",0),
		array(12125,3,"The Ape City",0),
		array(12126,3,"The Ape City",0),
		array(12127,4,"The Ape City",0),
		array(12128,3,"The Ape City",0),
		array(12129,3,"The Ape City",1),
		array(12101,1,"The Ancient Tombs",0),
		array(12102,1,"The Ancient Tombs",0),
		array(12103,1,"The Ancient Tombs",0),
		array(12104,1,"The Ancient Tombs",0),
		array(12105,1,"The Ancient Tombs",0),
		array(12106,1,"The Ancient Tombs",0),
		array(12107,1,"The Ancient Tombs",1),
		array(12022,3,"Barbarian Test Quest",0),
		array(12022,3,"Barbarian Test Quest",0),
		array(12022,3,"Barbarian Test Quest",1),
		array(12025,3,"The Ice Islands Quest",0),
		array(12026,5,"The Ice Islands Quest",0),
		array(12027,3,"The Ice Islands Quest",0),
		array(12028,2,"The Ice Islands Quest",0),
		array(12029,6,"The Ice Islands Quest",0),
		array(12030,8,"The Ice Islands Quest",0),
		array(12031,3,"The Ice Islands Quest",0),
		array(12032,4,"The Ice Islands Quest",0),
		array(12033,2,"The Ice Islands Quest",0),
		array(12034,2,"The Ice Islands Quest",0),
		array(12035,2,"The Ice Islands Quest",0),
		array(12036,6,"The Ice Islands Quest",1),
	);

	// Achievements based on "https://github.com/otland/forgottenserver/blob/master/data/lib/core/achievements.lua" (TFS 1.x)
	$config['Ach'] = false;
	$config['achievements'] = array(
		35000 => array(
			'First Dragon', // name
			'Rumours say that you will never forget your first Dragon', // description
			'points' => '1', // points
			'img' => 'https://i.imgur.com/Nk2XDge.gif', // direct image link or path, ex: 'images/dragon.png'
		),
		35001 => array(
			'Uniwheel',
			'You\'re probably one of the very few people with this classic and unique ride, hope it doesn\'t break anytime soon.', // description
			'points' => '1',
			'img' => 'https://i.imgur.com/0GYRgGj.gif', // direct image link or path, ex: 'images/uniwheel.png'
			'secret' => true
		),
		30001 => array(
			'Allow Cookies?',
			'With a perfectly harmless smile you fooled all of those wicecrackers into eating your exploding cookies. Consider a boy or girl scout outfit next time to make the trick even better.',
			'points' => '10', // 1-3 points (1 star), 4-6 points (2 stars), 7-9 points(3 stars), 10 points => (4 stars)
			'secret' => true // show "secret" badge
		),
		30002 => array(
			'Backpack Tourist',
			'If someone lost a random thing in a random place, you\'re probably a good person to ask and go find it, even if you don\'t know what and where.',
			'points' => '1'
		),
		30003 => array(
			'Bearhugger',
			'Warm, furry and cuddly - though that same bear you just hugged would probably rip you into pieces if he had been conscious, he reminded you of that old teddy bear which always slept in your bed when you were still small.',
			'points' => '4'
		),
		30004 => array(
			'Bone Brother',
			'You\'ve joined the undead bone brothers - making death your enemy and your weapon as well. Devouring what\'s weak and leaving space for what\'s strong is your primary goal.',
			'points' => '1'
		),
		30005 => array(
			'Chorister',
			'Lalalala... you now know the cult\'s hymn sung in Liberty Bay by heart. Not that hard, considering that it mainly consists of two notes and repetitive lyrics.',
			'points' => '1'
		),
		30006 => array(
			'Fountain of Life',
			'You found and took a sip from the Fountain of Life. Thought it didn\'t grant you eternal life, you feel changed and somehow at peace.',
			'points' => '1',
			'secret' => true
		),
		30007 => array(
			'Here, Fishy Fishy!',
			'Ah, the smell of the sea! Standing at the shore and casting a line is one of your favourite activities. For you, fishing is relaxing - and at the same time, providing easy food. Perfect!',
			'points' => '1'
		),
		30008 => array(
			'Honorary Barbarian',
			'You\'ve hugged bears, pushed mammoths and proved your drinking skills. And even though you have a slight hangover, a partially fractured rib and some greasy hair on your tongue, you\'re quite proud to call yourself a honorary barbarian from now on.',
			'points' => '1'
		),
		30009 => array(
			'Huntsman',
			'You\'re familiar with hunting tasks and have carried out quite a few already. A bright career as hunter for the Paw & Fur society lies ahead!',
			'points' => '2'
		),
		300010 => array(
			'Just in Time',
			'You\'re a fast runner and are good at delivering wares which are bound to decay just in the nick of time, even if you can\'t use any means of transportation or if your hands get cold or smelly in the process.',
			'points' => '1'
		),
		30011 => array(
			'Matchmaker',
			'You don\'t believe in romance to be a coincidence or in love at first sight. In fact - love potions, bouquets of flowers and cheesy poems do the trick much better than ever could. Keep those hormones flowing!',
			'points' => '1',
			'secret' => true
		),
		30012 => array(
			'Nightmare Knight',
			'You follow the path of dreams and that of responsibility without self-centered power. Free from greed and selfishness, you help others without expecting a reward.',
			'points' => '1',
			'secret' => true
		),
		30013 => array(
			'Party Animal',
			'Oh my god, it\'s a paaaaaaaaaaaarty! You\'re always in for fun, friends and booze and love being the center of attention. There\'s endless reasons to celebrate! Woohoo!',
			'points' => '1',
			'secret' => true
		),
		30014 => array(
			'Secret Agent',
			'Pack your spy gear and get ready for some dangerous missions in service of a secret agency. You\'ve shown you want to - but can you really do it? Time will tell.',
			'points' => '1',
			'secret' => true
		),
		30015 => array(
			'Talented Dancer',
			'You\'re a lord or lady of the dance - and not afraid to use your skills to impress tribal gods. One step to the left, one jump to the right, twist and shout!',
			'points' => '1'
		),
		30016 => array(
			'Territorial',
			'Your map is your friend - always in your back pocket and covered with countless marks of interesting and useful locations. One could say that you might be lost without it - but luckily there\'s no way to take it from you.',
			'points' => '1'
		),
		30017 => array(
			'Worm Whacker',
			'Weehee! Whack those worms! You sure know how to handle a big hammer.',
			'points' => '1',
			'secret' => true
		),
		30018 => array(
			'Allowance Collector',
			'You certainly have your ways when it comes to acquiring money. Many of them are pink and paved with broken fragments of porcelain.',
			'points' => '1'
		),
		30019 => array(
			'Amateur Actor',
			'You helped bringing Princess Buttercup, Doctor Dumbness and Lucky the Wonder Dog to life - and will probably dream of them tonight, since you memorised your lines perfectly. What a .. special piece of.. screenplay.',
			'points' => '2'
		),
		30020 => array(
			'Animal Activist',
			'You have a soft spot for little, weak animals, and you do everything in your power to protect them - even if you probably eat dragons for breakfast.',
			'points' => '2',
			'secret' => true
		),
	);

	// TFS 1.x powergamers y top online jugadores ( ver en la carpeta lua TFS_10 para los scripts o reportarse en el foro para el script powergamers )
	$config['powergamers'] = array(
		'enabled' => true, // true / false para activar
		'limit' => 5, // El limite de mostrar, 5
	);

	$config['toponline'] = array(
		'enabled' => true, // true/false para activar
		'limit' => 5, // Numero de jugadores que mostrara
	);

	// Vocations IDS
	$config['vocations'] = array(
		0 => array(
			'name' => 'No vocation',
			'fromVoc' => false
		),
		1 => array(
			'name' => 'Sorcerer',
			'fromVoc' => false
		),
		2 => array(
			'name' => 'Druid',
			'fromVoc' => false
		),
		3 => array(
			'name' => 'Paladin',
			'fromVoc' => false
		),
		4 => array(
			'name' => 'Knight',
			'fromVoc' => false
		),
		5 => array(
			'name' => 'Master Sorcerer',
			'fromVoc' => 1
		),
		6 => array(
			'name' => 'Elder Druid',
			'fromVoc' => 2
		),
		7 => array(
			'name' => 'Royal Paladin',
			'fromVoc' => 3
		),
		8 => array(
			'name' => 'Elite Knight',
			'fromVoc' => 4
		)
	);

	/* Vocation stat gains per level
		- Ordered by vocation ID
		- Currently used for admin_skills page. */
	$config['vocations_gain'] = array(
		0 => array(
			'hp' => 5,
			'mp' => 5,
			'cap' => 10
		),
		1 => array(
			'hp' => 5,
			'mp' => 30,
			'cap' => 10
		),
		2 => array(
			'hp' => 5,
			'mp' => 30,
			'cap' => 10
		),
		3 => array(
			'hp' => 10,
			'mp' => 15,
			'cap' => 20
		),
		4 => array(
			'hp' => 15,
			'mp' => 5,
			'cap' => 25
		),
		5 => array(
			'hp' => 5,
			'mp' => 30,
			'cap' => 10
		),
		6 => array(
			'hp' => 5,
			'mp' => 30,
			'cap' => 10
		),
		7 => array(
			'hp' => 10,
			'mp' => 15,
			'cap' => 20
		),
		8 => array(
			'hp' => 15,
			'mp' => 5,
			'cap' => 25
		),
	);
	// Towns ID del Hellgrave, no modificar
	$config['towns'] = array(
		1 => 'Mordragor',
		2 => 'Falanaar',
		3 => 'Dolwatha',
		4 => 'Mistfall',
		5 => 'Freewind'
	);

	// -- HOUSE AUCTION SYSTEM! (TFS 1.x ONLY)
	$config['houseConfig'] = array(
		'HouseListDefaultTown' => 8, // Default town id to display when visting house list page page.
		'minimumBidSQM' => 700, // Minimum bid cost on auction (per SQM)
		'auctionPeriod' => 24 * 60 * 60, // 24 hours auction time.
		'housesPerPlayer' => 1,
		'requirePremium' => true,
		'levelToBuyHouse' => 20,
		// Instant buy with shop points
		'shopPoints' => array(
			'enabled' => false,
			// SQM count => points cost
			'cost' => array(
				1 => 10,
				25 => 15,
				60 => 25,
				100 => 30,
				200 => 40,
				300 => 50,
			),
		),
	);

	// Leave on black square in map and player should get teleported to their selected town.
	// If chars get buggy set this position to a beginner location to force players there.
	$config['default_pos'] = array(
		'x' => 5,
		'y' => 5,
		'z' => 2,
	);

	$config['war_status'] = array(
		0 => 'Pending',
		1 => 'Accepted',
		2 => 'Rejected',
		3 => 'Canceled',
		4 => 'Ended by kill limit',
		5 => 'Ended',
	);

	/* -- SUB PAGES --
		Some custom layouts/templates have custom pages, they can use
		this sub page functionality for that.
	*/
	$config['allowSubPages'] = true;

	// ---------------- \\
	// Create Character \\
	// ---------------- \\

	// Maximo de chares por cuenta
	$config['max_characters'] = 8;

	// Available character vocation users can choose (specify vocation ID).
	$config['available_vocations'] = array(1,2,3,4);

	// Nueva Cuenta y personaje, empezara en mordragor(1)
	// Town IDs are the ones from $config['towns'] array
	$config['available_towns'] = array(1);

	$config['player'] = array(
		'base' => array(
			'level' => 1,
			'health' => 185,
			'mana' => 90,
			'cap' => 650,
			'soul' => 100
		),
		// Vida , skills y level del nuevo jugador en Hellgrave
		'create' => array(
			'level' => 10,
			'novocation' => array( // Vocation id 0 (No vocation) special settings
				'level' => 8,
				'forceTown' => true,
				'townId' => 1
			),
			'skills' => array( // See $config['vocations'] for proper vocation names of these IDs
				// No vocation
				0 => array(
					'magic' => 0,
					'fist' => 10,
					'club' => 10,
					'axe' => 10,
					'sword' => 10,
					'dist' => 10,
					'shield' => 10,
					'fishing' => 10,
				),
				// Sorcerer
				1 => array(
					'magic' => 0,
					'fist' => 10,
					'club' => 10,
					'axe' => 10,
					'sword' => 10,
					'dist' => 10,
					'shield' => 10,
					'fishing' => 10,
				),
				// Druid
				2 => array(
					'magic' => 0,
					'fist' => 10,
					'club' => 10,
					'axe' => 10,
					'sword' => 10,
					'dist' => 10,
					'shield' => 10,
					'fishing' => 10,
				),
				// Paladin
				3 => array(
					'magic' => 0,
					'fist' => 10,
					'club' => 10,
					'axe' => 10,
					'sword' => 10,
					'dist' => 10,
					'shield' => 10,
					'fishing' => 10,
				),
				// Knight
				4 => array(
					'magic' => 0,
					'fist' => 10,
					'club' => 10,
					'axe' => 10,
					'sword' => 10,
					'dist' => 10,
					'shield' => 10,
					'fishing' => 10,
				),
			),
			'male_outfit' => array(
				'id' => 128,
				'head' => 78,
				'body' => 68,
				'legs' => 58,
				'feet' => 76
			),
			'female_outfit' => array(
				'id' => 136,
				'head' => 78,
				'body' => 68,
				'legs' => 58,
				'feet' => 76
			)
		)
	);

	// Minimum allowed letters in character name. Ex: 4 letters: "Kare".
	$config['minL'] = 4;
	// Maximum allowed letters in character name. Ex: 20 letters: "Bobkareolesofiesberg"
	$config['maxL'] = 20;
	// Maximum allowed words in character name. Ex: 2 words = "Bob Kare", 3 words: "Bob Arne Kare" as maximum char name words.
	$config['maxW'] = 3;

	// -------------- \\
	// WEBSITE STUFF  \\
	// -------------- \\

	// News to be displayed per page
	$config['news_per_page'] = 5;

	// Enable or disable changelog ticker in news page.
	$config['UseChangelogTicker'] = true;

	// Highscore configuration
	$config['highscore'] = array(
		'rows' => 100,
		'rowsPerPage' => 20,
		'ignoreGroupId' => 2, // Ignore this and higher group ids (staff)
	);

	// ONLY FOR TFS 0.2 (TFS 0.3/4 users don't need to care about this, as its fully loaded from db)
	$config['house'] = array(
		'house_file' => 'C:\test\Mystic Spirit_0.2.5\data\world\forgotten-house.xml',
		'price_sqm' => '50', // price per house sqm
	);

	$config['delete_character_interval'] = '2 HOUR'; // Delay after user character delete request is executed, ex: 1 DAY, 2 HOUR, 3 MONTH etc.

	$config['validate_IP'] = false;
	$config['salt'] = false;

	// Restricted names
	$config['invalidNameTags'] = array(
		"owner", "gamemaster", "hoster", "admin", "staff", "tibia", "account", "god", "hitler", "cm", "gm", "game master", "anal", "anus", "arse", "ass", "asses", "assfucker", "assfukka", "asshole", "arsehole", "asswhole", "assmunch", "ballsack", "wanky", "whore", "whoar", "xxx", "xx", "yaoi", "yury", "bastard", "beastial", "bestial", "bellend", "bdsm", "beastiality", "bestiality", "bitch", "bitches", "bitchin", "bitching", "bimbo", "bimbos", "blow job", "blowjob", "blowjobs", "blue waffle", "boob", "boobs", "booobs", "boooobs", "booooobs", "booooooobs", "breasts", "booty call", "brown shower", "brown showers", "boner", "bondage", "buceta", "bukake", "bukkake", "bullshit", "bull shit", "busty", "butthole", "carpet muncher", "cawk", "chink", "cipa", "clit", "clits", "clitoris", "cnut", "cock", "cocks", "cockface", "cockhead", "cockmunch", "cockmuncher", "cocksuck", "cocksucked", "cocksucking", "cocksucks", "cocksucker", "cokmuncher", "coon", "cow girl", "cow girls", "cowgirl", "cowgirls", "crap", "crotch", "cum", "cummer", "cumming", "cuming", "cums", "cumshot", "cunilingus", "cunillingus", "cunnilingus", "cunt", "cuntlicker", "cuntlicking", "cunts", "damn", "dick", "dickhead", "dildo", "dildos", "dink", "dinks", "deepthroat", "deep throat", "dog style", "doggie style", "doggiestyle", "doggy style", "doggystyle", "donkeyribber", "doosh", "douche", "duche", "dyke", "ejaculate", "ejaculated", "ejaculates", "ejaculating", "ejaculatings", "ejaculation", "ejakulate", "erotic", "erotism", "fag", "faggot", "fagging", "faggit", "faggitt", "faggs", "fagot", "fagots", "fags", "fatass", "femdom", "fingering", "footjob", "foot job", "fuck", "fucks", "fucker", "fuckers", "fucked", "fuckhead", "fuckheads", "fuckin", "fucking", "fcuk", "fcuker", "fcuking", "felching", "fellate", "fellatio", "fingerfuck", "fingerfucked", "fingerfucker", "fingerfuckers", "fingerfucking", "fingerfucks", "fistfuck", "fistfucked", "fistfucker", "fistfuckers", "fistfucking", "fistfuckings", "fistfucks", "flange", "fook", "fooker", "fucka", "fuk", "fuks", "fuker", "fukker", "fukkin", "fukking", "futanari", "futanary", "gangbang", "gangbanged", "gang bang", "gokkun", "golden shower", "goldenshower", "gaysex", "goatse", "handjob", "hand job", "hentai", "hooker", "hoer", "homo", "horny", "incest", "jackoff", "jack off", "jerkoff", "jerk off", "jizz", "knob", "kinbaku", "labia", "masturbate", "masochist", "mofo", "mothafuck", "motherfuck", "motherfucker", "mothafucka", "mothafuckas", "mothafuckaz", "mothafucked", "mothafucker", "mothafuckers", "mothafuckin", "mothafucking", "mothafuckings", "mothafucks", "mother fucker", "motherfucked", "motherfucker", "motherfuckers", "motherfuckin", "motherfucking", "motherfuckings", "motherfuckka", "motherfucks", "milf", "muff", "negro", "nigga", "nigger", "nigg", "nipple", "nipples", "nob", "nob  jokey", "nobhead", "nobjocky", "nobjokey", "numbnuts", "nutsack", "nude", "nudes", "orgy", "orgasm", "orgasms", "panty", "panties", "penis", "playboy", "pinto", "porn", "porno", "pornography", "pron", "punheta", "pussy", "pussies", "puta", "rape", "raping", "rapist", "rectum", "retard", "rimming", "sadist", "sadism", "schlong", "scrotum", "sex", "semen", "shemale", "she male", "shibari", "shibary", "shit", "shitdick", "shitfuck", "shitfull", "shithead", "shiting", "shitings", "shits", "shitted", "shitters", "shitting", "shittings", "shitty", "shota", "skank", "slut", "sluts", "smut", "smegma", "spunk", "strip club", "stripclub", "tit", "tits", "titties", "titty", "titfuck", "tittiefucker", "titties", "tittyfuck", "tittywank", "titwank", "threesome", "three some", "throating", "twat", "twathead", "twatty", "twunt", "viagra", "vagina", "vulva", "viado", "wank", "wanker",
	// Comment out the line bellow if you want to allow players to use creature names:
		"acolyte of the cult", "adept of the cult", "amazon", "ancient scarab", "arachnophobica", "assassin", "azure frog", "badger", "bandit", "banshee", "barbarian bloodwalker", "barbarian brutetamer", "barbarian headsplitter", "barbarian skullhunter", "bat", "bear", "behemoth", "betrayed wraith", "biting book", "black knight", "black sphinx acolyte", "blightwalker", "blood beast", "blood crab", "blood hand", "blood priest", "blue djinn", "boar", "bog frog", "bog raider", "bonebeast", "bonelord", "boogy", "brain squid", "braindeath", "breach brood", "brimstone bug", "burning book", "burning gladiator", "burster spectre", "carniphila", "carrion worm", "cave devourer", "centipede", "chakoya toolshaper", "chakoya tribewarden", "chakoya windcaller", "choking fear", "clay guardian", "clomp", "cobra", "coral frog", "corym charlatan", "corym skirmisher", "corym vanguard", "crab", "crazed beggar", "crazed summer rearguard", "crazed summer vanguard", "crazed winter rearguard", "crazed winter vanguard", "crimson frog", "crocodile", "crypt defiler", "crypt shambler", "crypt warden", "crystal spider", "crystalcrusher", "cult believer", "cult enforcer", "cult scholar", "cyclops", "cyclops drone", "cyclops smith", "dark apprentice", "dark faun", "dark magician", "dark monk", "dark torturer", "dawnfire asura", "death blob", "deathling scout", "deathling spellsinger", "deepling guard", "deepling scout", "deepling spellsinger", "deepling warrior", "deepling worker", "deepworm", "defiler", "demon outcast", "demon skeleton", "demon", "destroyer", "devourer", "diabolic imp", "diamond servant", "diremaw", "dragon hatchling", "dragon lord hatchling", "dragon lord", "dragon", "draken abomination", "draken elite", "draken spellweaver", "draken warmaster", "dread intruder", "drillworm", "dwarf geomancer", "dwarf guard", "dwarf henchman", "dwarf soldier", "dwarf", "dworc fleshhunter", "dworc venomsniper", "dworc voodoomaster", "earth elemental", "efreet", "elder bonelord", "elder wyrm", "elephant", "elf arcanist", "elf scout", "elf", "emerald damselfly", "energetic book", "energy elemental", "enfeebled silencer", "enlightened of the cult", "enraged crystal golem", "eternal guardian", "falcon knight", "falcon paladin", "faun", "fire devil", "fire elemental", "firestarter", "forest fury", "fox", "frazzlemaw", "frost dragon hatchling", "frost dragon", "frost flower asura", "fury", "gargoyle", "gazer spectre", "ghastly dragon", "ghost", "ghoul", "giant spider", "gladiator", "gloom wolf", "glooth bandit", "glooth blob", "glooth brigand", "glooth golem", "gnarlhound", "guzzlemaw", "hand of cursed fate", "haunted treeling", "hellhound", "hellflayer", "hellfire fighter", "hellspawn", "hero", "honour guard", "hunter", "hydra", "ice golem", "ice witch", "infernalist", "juggernaut", "killer caiman", "kongra", "lancer beetle", "lamassu", "lich", "lizard chosen", "lizard dragon priest", "lizard high guard", "lizard legionnaire", "lizard sentinel", "lizard snakecharmer", "lizard templar", "lizard zaogun", "lost soul", "lumbering carnivor", "mad scientist", "mammoth", "marid", "marsh stalker", "medusa", "menacing carnivor", "mercury blob", "merlkin", "metal gargoyle", "midnight asura", "minotaur amazon", "minotaur archer", "minotaur cult follower", "minotaur cult prophet", "minotaur cult zealot", "minotaur guard", "minotaur hunter", "minotaur mage", "minotaur", "monk", "mooh'tah warrior", "moohtant", "mummy", "mutated bat", "mutated human", "mutated rat", "mutated tiger", "necromancer", "nightmare scion", "nightmare", "nightstalker", "nomad", "novice of the cult ", "nymph", "omnivora", "orc berserker", "orc leader", "orc rider", "orc shaman", "orc warlord", "orc warrior", "orc", "pirate buccaneer", "pirate corsair", "pirate cutthroat", "pirate ghost", "pirate marauder", "pirate skeleton", "pixie", "plaguesmith", "priestess", "pooka", "ravenous lava lurker", "renegade knight", "retching horror", "ripper spectre", "roaring lion", "rot elemental", "rotworm", "rustheap golem", "scarab", "scorpion", "sea serpent", "serpent spawn", "sibang", "silencer", "skeleton elite warrior", "souleater", "spectre", "spiky carnivor", "stone golem", "stonerefiner", "swamp troll", "tarantula", "terramite", "thornback tortoise", "toad", "tortoise", "twisted pooka", "undead elite gladiator", "undead gladiator", "valkyrie", "vampire bride", "vampire viscount", "vampire", "vexclaw", "vicious squire", "vile grandmaster", "vulcongra", "wailing widow", "war golem", "war wolf", "warlock", "wasp", "water elemental", "weakened frazzlemaw", "werebadger", "werebear", "wereboar", "werefox", "werewolf", "worm priestess", "wolf", "wyrm", "wyvern", "yielothax", "young sea serpent", "zombie", "adult goanna", "black sphinx acolyte", "burning gladiator", "cobra assassin", "cobra scout", "cobra vizier", "crypt warden", "feral sphinx", "lamassu", "manticore", "ogre rowdy", "ogre ruffian", "ogre sage", "priestess of the wild sun", "sphinx", "sun-marked goanna", "young goanna", "cursed prospector", "evil prospector", "flimsy lost soul", "freakish lost soul", "mean lost soul", "a shielded astral glyph", "abyssador", "an astral glyph", "ascending ferumbras", "annihilon", "apocalypse", "apprentice sheng", "arachir the ancient one", "armenius", "azerus", "barbaria", "baron brute", "battlemaster zunzu", "bazir", "big boss trolliver", "bones", "boogey", "bretzecutioner", "brokul", "bruise payne", "brutus bloodbeard", "bullwark", "chizzoron the distorter", "coldheart", "countess sorrow", "deadeye devious", "deathbine", "deathstrike", "demodras", "dharalion", "diblis the fair", "dirtbeard", "diseased bill", "diseased dan", "diseased fred", "doomhowl", "dracola", "dreadwing", "ekatrix", "energized raging mage", "esmeralda", "ethershreck", "evil mastermind", "fatality", "fazzrah", "fernfang", "feroxa", "ferumbras", "flameborn", "fleshcrawler", "fleshslicer", "fluffy", "foreman kneebiter", "freegoiz", "fury of the emperor", "furyosa", "gaz'haragoth", "general murius", "ghazbaran", "glitterscale", "gnomevil", "golgordan", "grand mother foulscale", "groam", "grorlam", "gorgo", "hairman the huge", "haunter", "hellgorak", "hemming", "heoni", "hide", "hirintror", "horadron", "horestis", "incineron", "infernatil", "inky", "jaul", "kerberos", "koshei the deathless", "kraknaknork's demon", "kraknaknork", "kroazur", "latrivan", "lethal lissy", "leviathan", "lisa", "lizard abomination", "lord of the elements", "mad mage", "mad technomancer", "madareth", "man in the cave", "massacre", "mawhawk", "menace", "mephiles", "minishabaal", "monstor", "morgaroth", "morik the gladiator", "mr. punish", "munster", "mutated zalamon", "necropharus", "obujos", "orshabaal", "paiz the pauperizer", "raging mage", "ribstride", "rocko", "ron the ripper", "rottie the rotworm", "rotworm queen", "scarlett etzel", "scorn of the emperor", "shardhead", "sharptooth", "sir valorcrest", "snake god essence", "snake thing", "spider queen", "spite of the emperor", "splasher", "stonecracker", "sulphur scuttler", "tanjis", "terofar", "teleskor", "the abomination", "the axeorcist", "the blightfather", "the bloodtusk", "the bloodweb", "the book of death", "the collector", "the count", "the weakened count", "the dreadorian", "the evil eye", "the frog prince", "the handmaiden", "the horned fox", "the keeper", "the imperor", "the many", "the noxious spawn", "the old widow", "the pale count", "the plasmother", "the snapper", "the distorted astral source", "the astral source", "thul", "tiquandas revenge", "tirecz", "tyrn", "tormentor", "tremorak", "tromphonyte", "ungreez", "ushuriel", "verminor", "versperoth", "warlord ruzad", "white pale", "wrath of the emperor", "xenia", "yaga the crone", "yakchal", "zanakeph", "zavarash", "zevelon duskbringer", "zomba", "zoralurk", "zugurosh", "zushuka", "zulazza the corruptor", "glooth bomb", "bibby bloodbath", "doctor perhaps", "mooh'tah master", "the welter"
	);

	// Use guild logo system
	$config['use_guild_logos'] = true;

	// Use country flags
	$config['country_flags'] = array(
		'enabled' => true,
		'highscores' => true,
		'onlinelist' => true,
		'characterprofile' => true,
		'server' => 'http://flag.znote.eu'
	);

	// Animated Outfits, no tocar la URL esta correcta
	$config['show_outfits'] = array(
		'shop' => true,
		'highscores' => true,
		'characterprofile' => true,
		'onlinelist' => true,
		// Image server may be unreliable and only for test,
		// host yourself: https://otland.net/threads/item-images-10-92.242492/
		'imageServer' => 'https://outfit-images.ots.me/1285_walk_animation/animoutfit.php'
	);

	// Show advanced inventory data in character profile
	$config['EQ_shower'] = array(
		'enabled' => true,
		'equipment' => true,
		'skills' => true,
		'outfits' => true,
		// Player storage (storage_value + outfitId)
		// used to see if player has outfit.
		// see Lua scripts folder for otserv code
		'storage_value' => 10000
	);

	// Level requirement to create guild? (Just set it to 1 to allow all levels).
	$config['create_guild_level'] = 10;

	// Change Gender can be purchased in shop, or perhaps you want to allow everyone to change gender for free?
	$config['free_sex_change'] = false;

	// Do you need to have premium account to create a guild?
	$config['guild_require_premium'] = true;

	// There is a TFS 1.3 bug related to guild nicks
	// https://github.com/otland/forgottenserver/issues/2561
	// So if your using TFS 1.x, you might need to disable guild nicks until the crash has been fixed.
	$config['guild_allow_nicknames'] = true;

	$config['guildwar_enabled'] = false;

	// Use htaccess rewrite? (basically this makes website.com/username work instead of website.com/characterprofile.php?name=username
	// Linux users needs to enable mod_rewrite php extention to make it work properly, so set it to false if your lost and using Linux.
	$config['htwrite'] = true;

	// What client version and server port are you using on this OT?
	// Used for the Downloads page.
	$config['client'] = 1272; // 954 = client 9.54

	// Link descarga del cliente ( No funcional para este Znote, porqué es totalmente custom ).
	$config['client_download'] = ''. $config['client'] .'.exe';
	$config['client_download_linux'] = ''. $config['client'] .'.tgz';

	$config['port'] = 7171; // Port number to connect to your OT.

	$config['status'] = array(
		'status_check' => false, // Enable or disable status checker
		'status_ip' => '127.0.0.1',
		'status_port' => "7171",
	);

	// Gameserver info is used for client 11+ loginWebService
	$config['login_web_service'] = true; // loginWebService for client 11+ enabled?
	$config['gameserver'] = array(
		'ip' => '127.0.0.1',
		'port' => 7172,
		'name' => 'Hellgrave' // Servername Debe de ser identico que en el config.lua del servidor
	);

	// How often do you want highscores to update?
	$config['cache_lifespan'] = 5; // 60 * 15; // 15 minutes.

	// CUENTA DEL GOD, para que tenga accesso en la pagina web en Admin Panel la cuenta por defecto es hellgrave/hellgrave
	$config['page_admin_access'] = array(
		'hellgrave',
		'hellgrave',
	);

	// Built-in FORUM
	// Enable forum, enable guildboards, level to create threads/post in them
	// How long do they have to wait to create thread or post?
	// How to design/display hidden/closed/sticky threads.
	$config['forum'] = array(
		'enabled' => true,
		'outfit_avatars' => true, // Show character outfit as forum avatar?
		'player_position' => true, // Show character position? ex: Tutor, Community Manager, God
		'guildboard' => true,
		'level' => 8,
		'cooldownPost' => 1, // 60,
		'cooldownCreate' => 1, // 180,
		'newPostsBumpThreads' => true,
		'hidden' => '<font color="orange">[H]</font>',
		'closed' => '<font color="red">[C]</font>',
		'sticky' => '<font color="green">[S]</font>',
	);

	// Guilds and guild war pages will do lots of queries on bigger databases.
	// So its recommended to require login to view them, but you can disable this
	// If you don't have any problems with load.
	$config['require_login'] = array(
		'guilds' => false,
		'guildwars' => false,
	);

	// Para poder banear a gente, deben de crear un personaje en la cuenta del GOD, que se llame como indicara aqui abajo 'God Website'
	$config['website_char'] = 'God Website';

	// ---------------- \\
	//  ADVANCED STUFF  \\
	// ---------------- \\
	// API config
	$config['api'] = array(
		'debug' => false,
	);

	// website.com/gallery.php
	// website.com/admin_gallery.php
	// we use imgur as image host, and need to register app with them and add client/secret id.
	// https://github.com/Znote/ZnoteAAC/wiki/IMGUR-powered-Gallery-page
	$config['gallery'] = array(
		'Client Name' => 'ZnoteAAC-Gallery',
		'Client ID' => '4dfcdc4f2cabca6',
		'Client Secret' => '697af737777c99a8c0be07c2f4419aebb2c48ac5'
	);

	// Email Server configurations (SMTP)
	/*	Please consider using a released stable version of PHPMailer or you may run into issues.
		Download PHPMailer: https://github.com/PHPMailer/PHPMailer/releases
		Extract to Znote AAC directory (where this config.php file is located)
		Rename the folder to "PHPMailer". Then configure this with your SMTP mail settings from your email provider.
	*/
	$config['mailserver'] = array(
		'register' => false, // Send activation mail
		'accountRecovery' => false, // Recover username or password through mail
		'myaccount_verify_email' => false, // Allow user to verify their email in myaccount page
		'verify_email_points' => 0, // 0 = disabled. Give users points reward for verifying their email
		'host' => "smtp.live.com", // Outgoing mail server host.
		'securityType' => 'ssl', // ssl or tls
		'port' => 465, // SMTP port number - likely to be 465(ssl) or 587(tls)
		'email' => '',
		'username' => '', // Likely the same as email
		'password' => '', // The password.
		'debug' => false, // Enable debugging if you have problems and are looking for errors.
		'fromName' => $config['site_title'],
	);

	// Don't touch this unless you know what you are doing. (modifying these (key value) also requires modifications in OT files data/XML/groups.xml).
	$config['ingame_positions'] = array(
		1 => 'Player',
		2 => 'Tutor',
		3 => 'Senior Tutor',
		4 => 'Gamemaster',
		5 => 'Community Manager',
		6 => 'God',
	);

	// Enable OS advanced features? false = no, true = yes
	$config['os_enabled'] = false;

	// What kind of computer are you hosting this website on?
	// Available options: LINUX or WINDOWS
	$config['os'] = ZNOTE_OS; // Use 'ZNOTE_OS' to auto-detect

	// Measure how much players are lagging in-game. (Not completed).
	$config['ping'] = false;

	// BAN STUFF - Don't touch this unless you know what you are doing.
	// You can order the lines the way you want, from top to bottom, in which order you
	// wish for them to be displayed in admin panel. Just make sure key[#] represent your description.
	$config['ban_type'] = array(
		4 => 'NOTATION_ACCOUNT',
		2 => 'NAMELOCK_PLAYER',
		3 => 'BAN_ACCOUNT',
		5 => 'DELETE_ACCOUNT',
		1 => 'BAN_IPADDRESS',
	);

	// BAN STUFF - Don't touch this unless you know what you are doing.
	// You can order the lines the way you want, from top to bot, in which order you
	// wish for them to be displayed in admin panel. Just make sure key[#] represent your description.
	$config['ban_action'] = array(
		0 => 'Notation',
		1 => 'Name Report',
		2 => 'Banishment',
		3 => 'Name Report + Banishment',
		4 => 'Banishment + Final Warning',
		5 => 'NR + Ban + FW',
		6 => 'Statement Report',
	);

	// Ban reasons, for changes beside default values to work with client,
	// you also need to edit sources (https://github.com/otland/forgottenserver/blob/master/src/enums.h#L29)
	$config['ban_reason'] = array(
		0 => 'Offensive Name',
		1 => 'Invalid Name Format',
		2 => 'Unsuitable Name',
		3 => 'Name Inciting Rule Violation',
		4 => 'Offensive Statement',
		5 => 'Spamming',
		6 => 'Illegal Advertising',
		7 => 'Off-Topic Public Statement',
		8 => 'Non-English Public Statement',
		9 => 'Inciting Rule Violation',
		10 => 'Bug Abuse',
		11 => 'Game Weakness Abuse',
		12 => 'Using Unofficial Software to Play',
		13 => 'Hacking',
		14 => 'Multi-Clienting',
		15 => 'Account Trading or Sharing',
		16 => 'Threatening Gamemaster',
		17 => 'Pretending to Have Influence on Rule Enforcement',
		18 => 'False Report to Gamemaster',
		19 => 'Destructive Behaviour',
		20 => 'Excessive Unjustified Player Killing',
		21 => 'Spoiling Auction',
	);

	// BAN STUFF
	// Ban time duration selection in admin panel
	// seconds => description
	$config['ban_time'] = array(
		3600 => '1 hour',
		21600 => '6 hours',
		43200 => '12 hours',
		86400 => '1 day',
		259200 => '3 days',
		604800 => '1 week',
		1209600 => '2 weeks',
		2592000 => '1 month',
	);

	// --------------- \\
	// SECURITY STUFF  \\
	// --------------- \\
	$config['use_token'] = false;
	// Set up captcha keys on https://www.google.com/recaptcha/
	$config['use_captcha'] = false;
	$config['captcha_site_key'] = "Site key";
	$config['captcha_secret_key'] = "Secret key";
	$config['captcha_use_curl'] = false; // Set to false if you don't have cURL installed, otherwise set it to true

	// Session prefix, if you are hosting multiple sites, make the session name different to avoid conflict.
	$config['session_prefix'] = 'znote_';

	/*	Store visitor data
		Store visitor data in the database, logging every IP visiting site,
		and how many times they have visited the site. And sometimes what
		they do on the site.

		This helps to prevent POST SPAM (like register 1000 accounts in a few seconds)
		and other things which can stress and slow down the server.

		The only downside is that database can get pretty fed up with much IP data
		if table never gets flushed once in a while. So I highly recommend you
		to configure flush_ip_logs if IPs are logged.
	*/
	$config['log_ip'] = false;

	// Flush IP logs each configured seconds, 60 * 15 = 15 minutes.
	// Set to false to entirely disable ip log flush.
	// It is important to flush for optimal performance.
	$config['flush_ip_logs'] = 59 * 27;

	/*	IP SECURTY REQUIRE: $config['log_ip'] = true;
		Configure how tight this security shall be.
		Etc: You can max click on anything/refresh page
		[max activity] 15 times, within time period 10
		seconds. During time_period, you can also only
		register 1 account and 1 character.
	*/
	$config['ip_security'] = array(
		'time_period' => 10, // In seconds
		'max_activity' => 10, // page clicks/visits
		'max_post' => 6, // register, create, highscore, character search and such actions
		'max_account' => 1, // register
		'max_character' => 1, // create char
		'max_forum_post' => 1, // create threads and post in forum
	);

	//////////////
	/// PAYPAL ///
	//////////////
	// https://www.paypal.com/

	// Indicar el correo paypal, si os aparece phpCURL a la hora de abrir la pagina, debereis de entrar en el php.ini ( si usais xampp ) y desmarcar ;extension=cURL quedaria: extension=cURL , si es en uniserverz el fichero se llama php_production.ini
	// Para terminar con el paypal una vez hecho, ireis en vuestra cuenta paypal > opciones > herramientas de vendedor > Notificacion instantanea > os pedira el IPN, una url que insertar, 
	// si su servidor se llama: www.hellgrave.com, indicaran: https://hellgrave.com/ipn.php ipn.php al final importante. http o https, dependiendo si tienen SSL.
	$config['paypal'] = array(
		'enabled' => true,
		'email' => '', // CORREO PAYPAL
		'currency' => ' EUR ', // EUR / USD
		'points_per_currency' => 10, // Para calcular el bonus en la web, indicar 1 EUR/USD , cuantos puntos
		'success' => "http://".$_SERVER['HTTP_HOST']."/success.php",
		'failed' => "http://".$_SERVER['HTTP_HOST']."/failed.php",
		'ipn' => "http://".$_SERVER['HTTP_HOST']."/ipn.php",
		'showBonus' => true,
	);

	// Configurar los puntos por precio
	$config['paypal_prices'] = array(
	//	PRECIO => PUNTOS,
		5 => 50, 
		10 => 100, 
		15 => 180, 
		20 => 400, 
		30 => 675, 
		50 => 1200, 
	);

	/////////////////
	/// PAGSEGURO ///
	/////////////////
	// https://pagseguro.uol.com.br/

	// Write your pagseguro address here, and what currency you want to receive money in.
	$config['pagseguro'] = array(
		'enabled' => false,
		'sandbox' => false,
		'email' => 'edit@me.com', // Example: pagseguro@mail.com
		'token' => '',
		'currency' => 'BRL',
		'product_name' => '',
		'price' => 100, // 1 real
		'ipn' => "http://".$_SERVER['HTTP_HOST']."/pagseguro_ipn.php",
		'urls' => array(
			'www' => 'pagseguro.uol.com.br',
			'ws'  => 'ws.pagseguro.uol.com.br',
			'stc' => 'stc.pagseguro.uol.com.br'
		)
	);

	if ($config['pagseguro']['sandbox']) {
		$config['pagseguro']['urls'] = array_map(function ($item) {
			return str_replace('pagseguro', 'sandbox.pagseguro', $item);
		}, $config['pagseguro']['urls']);
	}

	//////////////////
	/// PAYGOL SMS ///
	//////////////////
	// https://www.paygol.com/
	// !!! Paygol takes 60%~ of the money, and send aprox 40% to your paypal.
	// You can configure paygol to send each month, then they will send money
	// to you 1 month after receiving 50+ eur.
	$config['paygol'] = array(
		'enabled' => false,
		'serviceID' => 86648, // Service ID from paygol.com
		'secretKey' => 'xxxx-xxxx-xxxx-xxxx', // Secret key from paygol.com. Never share your secret key
		'currency' => 'SEK',
		'price' => 20,
		'points' => 20,
		'name' => '20 points',
		'returnURL' => "http://".$_SERVER['HTTP_HOST']."/success.php",
		'cancelURL' => "http://".$_SERVER['HTTP_HOST']."/failed.php"
	);

	////////////
	/// SHOP ///
	////////////
	// SHOP System, si estan utilizando el shop system, verifiquen que tengan un archivo llamado shop.lua en data/scripts/talkactions/players, en el caso Hellgrave server lo tiene.
	// Una vez comprado el item utilizar el comando !Shop en el juego
	$config['shop'] = array(
		'enabled' => true,
		'loginToView' => true, // Necessita registrarse para ver el shop ?
		'enableShopConfirmation' => true, // Indicar si quiere comprar con un popup 
		'useDB' => true, // Fetch offers from database, or the below config array
		'showImage' => true,
		'imageServer' => 'item-images.ots.me/1285/', // Imagenes desde el link official 12.85 -- Puede variar muchissimo dependiendo el servidor. Aconsejo descargar la carpeta y agregar sus propios items. Para indicar la url sera simple, www.hellgrave.com es nuestra url entonces sera hellgrave.com/items, si llamamos la carpeta items.
		'imageType' => 'gif',
	);

	//////////
	/// CHARACTER AUCTION - AUCTION CHAR //////
	
	/// Let players sell, buy and bid on characters.
	/// Creates a deeper shop economy, encourages players to spend more money in shop for points.
	/// Pay to win/progress mechanic, but also lets people who can barely afford points to gain it
	/// by leveling characters to sell. It can also discourages illegal/risky third-party account
	/// services. Since players can buy officially & support the server, dodgy competitors have to sell for cheaper.
	/// Without admin interference this is organic to each individual community economy inflation.
	//////////
	$config['shop_auction'] = array(
		'characterAuction' => true, // Enable/disable this system
		// Account ID of the account that stores players in the auction.
		// Make sure storage account has a very secure password!
		'storage_account_id' => 7, // Separate secure account ID, not your GM.
		'step' => 5, // Minimum amount someone can raise a bid by
		'step_duration' => 1 * 60 * 60, // When bidding over someone else, extend bid period by 1 hour.
		'lowestLevel' => 20, // Minimum level of sold character
		'lowestPrice' => 10, // Lowest donation points a char can be sold for.
		'biddingDuration' => 0, // = 1 day, 0 to disable bidding
		'deposit' => 10 // Seller has to add 10=10% deposit to auction which he gets back later.
	);

	/*
	//// SHOP ITEMS ////
	//// ITEMS Agregados para el Hellgrave Server /////
	//// Pueden modificarlos, esto es solo una base para que no tengais que escribirlo todo vosotros mismos, disfrutenlo /////
		type 1 = Items
		type 2 = Premium days
		type 3 = Change character gender
		type 4 = Change character name
		type 5 = Buy outfit (put outfit id as itemid),
		(put addon id as count [0 = nothing, 1 = first addon, 2 = second addon, 3 = both addons])
		type 6 = Buy mount (put mount id as itemid)
		type 7 = Buy house (hardcoded in the house system, type used for data log)
		type 8+ = custom coded stuff
	*/
	$config['shop_offers'] = array(
		2 => array(
			'type' => 2,
			'itemid' => 16101, // Item to display on page
			'count' => 30, // Days of premium account
			'description' => "Premium membership",
			'points' => 10,
		),
		3 => array(
			'type' => 4,
			'itemid' => 12666, // Item to display on page
			'count' => 1,
			'description' => "Change character name",
			'points' => 300,
		),
		4 => array(
			'type' => 5,
			'itemid' => [132, 140], // Outfit ID
			'count' => 3, // Addon 0 = none, 1 = first, 2 = second, 3 = both
			'description' => "Noble outfit with addons.",
			'points' => 250,
		),
		5 => array(
			'type' => 6,
			'itemid' => 32, // Mount ID
			'count' => 1,
			'description' => "Gnarlhound mount",
			'points' => 150,
		),
		6 => array(
			'type' => 6,
			'itemid' => 17,
			'count' => 1,
			'description' => "War horse",
			'points' => 150,
		),
		7 => array(
			'type' => 5,
			'itemid' => [128,136],
			'count' => 3,
			'description' => "Citizen outfit with addons.",
			'points' => 300,
		),
		8 => array(
			'type' => 5,
			'itemid' => [129,137],
			'count' => 3,
			'description' => "Hunter outfit with addons.",
			'points' => 300,
		),
		9 => array(
			'type' => 5,
			'itemid' => [130,141],
			'count' => 3,
			'description' => "Mage outfit with addons.",
			'points' => 300,
		),
		10 => array(
			'type' => 5,
			'itemid' => [131,139],
			'count' => 3,
			'description' => "Knight outfit with addons.",
			'points' => 300,
		),
		11 => array(
			'type' => 5,
			'itemid' => [133,138],
			'count' => 3,
			'description' => "Summoner outfit with addons.",
			'points' => 300,
		),
		14 => array(
			'type' => 5,
			'itemid' => [134,142],
			'count' => 3,
			'description' => "Warrior outfit with addons.",
			'points' => 300,
		),
		15 => array(
			'type' => 5,
			'itemid' => [143,147],
			'count' => 3,
			'description' => "Barbarian outfit with addons.",
			'points' => 300,
		),
		16 => array(
			'type' => 5,
			'itemid' => [144,148],
			'count' => 3,
			'description' => "Druid outfit with addons.",
			'points' => 300,
		),
		17 => array(
			'type' => 5,
			'itemid' => [145,149],
			'count' => 3,
			'description' => "Wizard outfit with addons.",
			'points' => 300,
		),
		18 => array(
			'type' => 5,
			'itemid' => [146,150],
			'count' => 3,
			'description' => "Oriental outfit with addons.",
			'points' => 350,
		),
		19 => array(
			'type' => 5,
			'itemid' => [151,155],
			'count' => 3,
			'description' => "Pirate outfit with addons.",
			'points' => 350,
		),
		20 => array(
			'type' => 5,
			'itemid' => [152,156],
			'count' => 3,
			'description' => "Assassin outfit with addons.",
			'points' => 350,
		),
		21 => array(
			'type' => 5,
			'itemid' => [153,157],
			'count' => 3,
			'description' => "Beggar outfit with addons.",
			'points' => 350,
		),
		22 => array(
			'type' => 5,
			'itemid' => [154,158],
			'count' => 3,
			'description' => "Shaman outfit with addons.",
			'points' => 300,
		),
		23 => array(
			'type' => 5,
			'itemid' => [251,252],
			'count' => 3,
			'description' => "Norseman outfit with addons.",
			'points' => 250,
		),
		24 => array(
			'type' => 5,
			'itemid' => [268,269],
			'count' => 3,
			'description' => "Nightmare outfit with addons.",
			'points' => 300,
		),
		25 => array(
			'type' => 5,
			'itemid' => [273,270],
			'count' => 3,
			'description' => "Jester outfit with addons.",
			'points' => 250,
		),
		26 => array(
			'type' => 5,
			'itemid' => [278,279],
			'count' => 3,
			'description' => "Brotherhood outfit with addons.",
			'points' => 250,
		),
		27 => array(
			'type' => 5,
			'itemid' => [289,288],
			'count' => 3,
			'description' => "Demon hunter outfit with addons.",
			'points' => 300,
		),
		28 => array(
			'type' => 5,
			'itemid' => [324,325],
			'count' => 3,
			'description' => "Yalaharian outfit with addons.",
			'points' => 300,
		),
		30 => array(
			'type' => 5,
			'itemid' => [335,336],
			'count' => 3,
			'description' => "Warmaster outfit with addons.",
			'points' => 250,
		),
		31 => array(
			'type' => 5,
			'itemid' => [367,366],
			'count' => 3,
			'description' => "Wayfarer outfit with addons.",
			'points' => 250,
		),
		31 => array(
			'type' => 5,
			'itemid' => [430,431],
			'count' => 3,
			'description' => "Afflicted outfit with addons.",
			'points' => 250,
		),
		32 => array(
			'type' => 5,
			'itemid' => [432,433],
			'count' => 3,
			'description' => "Elementalist outfit with addons.",
			'points' => 300,
		),
		33 => array(
			'type' => 5,
			'itemid' => [463,464],
			'count' => 3,
			'description' => "Deepling outfit with addons.",
			'points' => 300,
		),
		34 => array(
			'type' => 5,
			'itemid' => [465,466],
			'count' => 3,
			'description' => "Insectoid outfit with addons.",
			'points' => 300,
		),
		35 => array(
			'type' => 5,
			'itemid' => [1243,1244],
			'count' => 3,
			'description' => "Hand of Inquisition with addons ( Tomb Assassin )",
			'points' => 450,
		),
		36 => array(
			'type' => 5,
			'itemid' => [512,513],
			'count' => 3,
			'description' => "Crystal Warlord outfit with addons.",
			'points' => 300,
		),
		37 => array(
			'type' => 5,
			'itemid' => [516,514],
			'count' => 3,
			'description' => "Soil Guardian outfit with addons.",
			'points' => 300,
		),
		38 => array(
			'type' => 5,
			'itemid' => [541,542],
			'count' => 3,
			'description' => "Demon outfit with addons.",
			'points' => 300,
		),
		39 => array(
			'type' => 5,
			'itemid' => [574,575],
			'count' => 3,
			'description' => "Cave Explorer outfit with addons.",
			'points' => 300,
		),
		40 => array(
			'type' => 5,
			'itemid' => [577,578],
			'count' => 3,
			'description' => "Dream Warden outfit with addons.",
			'points' => 300,
		),
		41 => array(
			'type' => 5,
			'itemid' => [610,618],
			'count' => 3,
			'description' => "Glooth Engineer outfit with addons.",
			'points' => 300,
		),
		45 => array(
			'type' => 5,
			'itemid' => [1042,1043],
			'count' => 3,
			'description' => "Makeshift Warrior outfit with addons.",
			'points' => 300,
		),
		54 => array(
			'type' => 5,
			'itemid' => [746,745],
			'count' => 3,
			'description' => "Recruiter outfit with addons.",
			'points' => 300,
		),
		57 => array(
			'type' => 5,
			'itemid' => [846,845],
			'count' => 3,
			'description' => "Rift Warrior outfit with addons.",
			'points' => 300,
		),
		58 => array(
			'type' => 5,
			'itemid' => [853,852],
			'count' => 3,
			'description' => "Winter Warden outfit with addons.",
			'points' => 300,
		),
		61 => array(
			'type' => 5,
			'itemid' => [899,900],
			'count' => 3,
			'description' => "Lupine outfit with addons.",
			'points' => 300,
		),
		62 => array(
			'type' => 5,
			'itemid' => [908,909],
			'count' => 3,
			'description' => "Grove Keeper outfit with addons.",
			'points' => 300,
		),
		63 => array(
			'type' => 5,
			'itemid' => [931,929],
			'count' => 3,
			'description' => "Festive outfit with addons.",
			'points' => 300,
		),
		74 => array(
			'type' => 1,
			'itemid' => 35232, // Item to display on page
			'count' => 1,
			'description' => "Cobra Hood +1 Sword +1 Club +1 Axe +5% Physical - Knights",
			'points' => 350,
		),
		75 => array(
			'type' => 1,
			'itemid' => 32415,
			'count' => 1,
			'description' => "Falcon Coif +2 Distance +2 Shielding +3% Physical +10% Fire - Paladins & Knights level 300",
			'points' => 350,
		),
		94 => array(
			'type' => 6,
			'itemid' => 1, // Mount ID
			'count' => 1,
			'description' => "Widow Queen mount",
			'points' => 150,
		),
		95 => array(
			'type' => 6,
			'itemid' => 2, // Mount ID
			'count' => 1,
			'description' => "Racing Bird mount",
			'points' => 150,
		),
		96 => array(
			'type' => 6,
			'itemid' => 3, // Mount ID
			'count' => 1,
			'description' => "War Bear mount",
			'points' => 150,
		),
		97 => array(
			'type' => 6,
			'itemid' => 4, // Mount ID
			'count' => 1,
			'description' => "Black Sheep mount",
			'points' => 150,
		),
		98 => array(
			'type' => 6,
			'itemid' => 5, // Mount ID
			'count' => 1,
			'description' => "Midnight Panther mount",
			'points' => 200,
		),
		99 => array(
			'type' => 6,
			'itemid' => 6, // Mount ID
			'count' => 1,
			'description' => "Draptor mount",
			'points' => 200,
		),
		100 => array(
			'type' => 6,
			'itemid' => 7, // Mount ID
			'count' => 1,
			'description' => "Titanica mount",
			'points' => 200,
		),
		101 => array(
			'type' => 6,
			'itemid' => 8, // Mount ID
			'count' => 1,
			'description' => "Tin Lizzard mount",
			'points' => 200,
		),
		102 => array(
			'type' => 6,
			'itemid' => 9, // Mount ID
			'count' => 1,
			'description' => "Blazerbringer mount",
			'points' => 200,
		),
		103 => array(
			'type' => 6,
			'itemid' => 10, // Mount ID
			'count' => 1,
			'description' => "Rapid Boar mount",
			'points' => 150,
		),
		104 => array(
			'type' => 6,
			'itemid' => 11, // Mount ID
			'count' => 1,
			'description' => "Stampor mount",
			'points' => 180,
		),
		105 => array(
			'type' => 6,
			'itemid' => 12, // Mount ID
			'count' => 1,
			'description' => "Undead Cavebear mount",
			'points' => 220,
		),
		106 => array(
			'type' => 6,
			'itemid' => 13, // Mount ID
			'count' => 1,
			'description' => "Donkey mount",
			'points' => 220,
		),
		107 => array(
			'type' => 6,
			'itemid' => 14, // Mount ID
			'count' => 1,
			'description' => "Tiger Slug mount",
			'points' => 220,
		),
		108 => array(
			'type' => 6,
			'itemid' => 15, // Mount ID
			'count' => 1,
			'description' => "Uniwheel mount",
			'points' => 180,
		),
		109 => array(
			'type' => 6,
			'itemid' => 16, // Mount ID
			'count' => 1,
			'description' => "Crystal Wolf mount",
			'points' => 200,
		),
		110 => array(
			'type' => 6,
			'itemid' => 18, // Mount ID
			'count' => 1,
			'description' => "Kingly Deer mount",
			'points' => 150,
		),
		111 => array(
			'type' => 6,
			'itemid' => 19, // Mount ID
			'count' => 1,
			'description' => "Tamed Panda mount",
			'points' => 150,
		),
		112 => array(
			'type' => 6,
			'itemid' => 20, // Mount ID
			'count' => 1,
			'description' => "Dromedary mount",
			'points' => 150,
		),
		113 => array(
			'type' => 6,
			'itemid' => 21, // Mount ID
			'count' => 1,
			'description' => "Scorpion king mount",
			'points' => 200,
		),
		114 => array(
			'type' => 6,
			'itemid' => 22, // Mount ID
			'count' => 1,
			'description' => "Rented Horse mount",
			'points' => 150,
		),
		115 => array(
			'type' => 6,
			'itemid' => 23, // Mount ID
			'count' => 1,
			'description' => "Armoured War Horse mount",
			'points' => 150,
		),
		116 => array(
			'type' => 6,
			'itemid' => 24, // Mount ID
			'count' => 1,
			'description' => "Shadow Draptor mount",
			'points' => 200,
		),
		117 => array(
			'type' => 6,
			'itemid' => 25, // Mount ID
			'count' => 1,
			'description' => "Rented Horse Gray mount",
			'points' => 150,
		),
		118 => array(
			'type' => 6,
			'itemid' => 26, // Mount ID
			'count' => 1,
			'description' => "Rented Horse Brown mount",
			'points' => 150,
		),
		119 => array(
			'type' => 6,
			'itemid' => 27, // Mount ID
			'count' => 1,
			'description' => "Lady bug mount",
			'points' => 200,
		),
		120 => array(
			'type' => 6,
			'itemid' => 28, // Mount ID
			'count' => 1,
			'description' => "Manta Ray mount",
			'points' => 150,
		),
		121 => array(
			'type' => 6,
			'itemid' => 29, // Mount ID
			'count' => 1,
			'description' => "Ironblight mount",
			'points' => 250,
		),
		122 => array(
			'type' => 6,
			'itemid' => 30, // Mount ID
			'count' => 1,
			'description' => "Magma Crawler mount",
			'points' => 250,
		),
		123 => array(
			'type' => 6,
			'itemid' => 31, // Mount ID
			'count' => 1,
			'description' => "Dragonling mount",
			'points' => 200,
		),
		124 => array(
			'type' => 6,
			'itemid' => 33, // Mount ID
			'count' => 1,
			'description' => "Crimson Ray mount",
			'points' => 150,
		),
		125 => array(
			'type' => 6,
			'itemid' => 34, // Mount ID
			'count' => 1,
			'description' => "Steelbeak mount",
			'points' => 150,
		),
		126 => array(
			'type' => 6,
			'itemid' => 35, // Mount ID
			'count' => 1,
			'description' => "Water Buffalo mount",
			'points' => 150,
		),
		127 => array(
			'type' => 6,
			'itemid' => 36, // Mount ID
			'count' => 1,
			'description' => "Tombstinger mount",
			'points' => 150,
		),
		128 => array(
			'type' => 6,
			'itemid' => 37, // Mount ID
			'count' => 1,
			'description' => "Platesaurian mount",
			'points' => 150,
		),
		129 => array(
			'type' => 6,
			'itemid' => 38, // Mount ID
			'count' => 1,
			'description' => "Ursagrodon mount",
			'points' => 150,
		),
		130 => array(
			'type' => 6,
			'itemid' => 39, // Mount ID
			'count' => 1,
			'description' => "The Hellgrip mount",
			'points' => 150,
		),
		131 => array(
			'type' => 6,
			'itemid' => 40, // Mount ID
			'count' => 1,
			'description' => "Noble Lion mount",
			'points' => 150,
		),
		132 => array(
			'type' => 6,
			'itemid' => 41, // Mount ID
			'count' => 1,
			'description' => "Desert King mount",
			'points' => 150,
		),
		133 => array(
			'type' => 6,
			'itemid' => 42, // Mount ID
			'count' => 1,
			'description' => "Shock Head mount",
			'points' => 250,
		),
		134 => array(
			'type' => 6,
			'itemid' => 43, // Mount ID
			'count' => 1,
			'description' => "Walker mount",
			'points' => 200,
		),
		135 => array(
			'type' => 6,
			'itemid' => 44, // Mount ID
			'count' => 1,
			'description' => "Azudocus mount",
			'points' => 200,
		),
		136 => array(
			'type' => 6,
			'itemid' => 45, // Mount ID
			'count' => 1,
			'description' => "Carpacosaurus mount",
			'points' => 200,
		),
		137 => array(
			'type' => 6,
			'itemid' => 46, // Mount ID
			'count' => 1,
			'description' => "Death Crawler mount",
			'points' => 250,
		),
		138 => array(
			'type' => 6,
			'itemid' => 47, // Mount ID
			'count' => 1,
			'description' => "Flamesteed mount",
			'points' => 250,
		),
		139 => array(
			'type' => 6,
			'itemid' => 48, // Mount ID
			'count' => 1,
			'description' => "Jade Lion mount",
			'points' => 150,
		),
		140 => array(
			'type' => 6,
			'itemid' => 49, // Mount ID
			'count' => 1,
			'description' => "Jade Pincer mount",
			'points' => 200,
		),
		141 => array(
			'type' => 6,
			'itemid' => 50, // Mount ID
			'count' => 1,
			'description' => "Nethersteed mount",
			'points' => 250,
		),
		142 => array(
			'type' => 6,
			'itemid' => 51, // Mount ID
			'count' => 1,
			'description' => "Tempest mount",
			'points' => 250,
		),
		143 => array(
			'type' => 6,
			'itemid' => 52, // Mount ID
			'count' => 1,
			'description' => "Winter King mount",
			'points' => 150,
		),
		144 => array(
			'type' => 6,
			'itemid' => 53, // Mount ID
			'count' => 1,
			'description' => "Doombringer mount",
			'points' => 200,
		),
		145 => array(
			'type' => 6,
			'itemid' => 54, // Mount ID
			'count' => 1,
			'description' => "Woodland Prince mount",
			'points' => 220,
		),
		146 => array(
			'type' => 6,
			'itemid' => 55, // Mount ID
			'count' => 1,
			'description' => "Hailstorm Fury mount",
			'points' => 220,
		),
		147 => array(
			'type' => 6,
			'itemid' => 56, // Mount ID
			'count' => 1,
			'description' => "Siegebreaker mount",
			'points' => 200,
		),
		148 => array(
			'type' => 6,
			'itemid' => 57, // Mount ID
			'count' => 1,
			'description' => "Poisonbane mount",
			'points' => 220,
		),
		149 => array(
			'type' => 6,
			'itemid' => 58, // Mount ID
			'count' => 1,
			'description' => "Blackpelt mount",
			'points' => 150,
		),
		150 => array(
			'type' => 6,
			'itemid' => 59, // Mount ID
			'count' => 1,
			'description' => "Golden Dragonfly mount",
			'points' => 200,
		),
		151 => array(
			'type' => 6,
			'itemid' => 60, // Mount ID
			'count' => 1,
			'description' => "Steel Bee mount",
			'points' => 200,
		),
		152 => array(
			'type' => 6,
			'itemid' => 61, // Mount ID
			'count' => 1,
			'description' => "Copper Fly mount",
			'points' => 150,
		),
		153 => array(
			'type' => 6,
			'itemid' => 62, // Mount ID
			'count' => 1,
			'description' => "Tundra Rambler mount",
			'points' => 200,
		),
		153 => array(
			'type' => 6,
			'itemid' => 63, // Mount ID
			'count' => 1,
			'description' => "Highland Yak mount",
			'points' => 150,
		),
		154 => array(
			'type' => 6,
			'itemid' => 64, // Mount ID
			'count' => 1,
			'description' => "Glacier Vagabond mount",
			'points' => 150,
		),
		155 => array(
			'type' => 6,
			'itemid' => 65, // Mount ID
			'count' => 1,
			'description' => "Flying Divan mount",
			'points' => 250,
		),
		156 => array(
			'type' => 6,
			'itemid' => 66, // Mount ID
			'count' => 1,
			'description' => "Magic Carpet mount",
			'points' => 250,
		),
		157 => array(
			'type' => 6,
			'itemid' => 67, // Mount ID
			'count' => 1,
			'description' => "Floating Kashmir mount",
			'points' => 250,
		),
		158 => array(
			'type' => 6,
			'itemid' => 68, // Mount ID
			'count' => 1,
			'description' => "Ringtail Waccon mount",
			'points' => 250,
		),
		159 => array(
			'type' => 6,
			'itemid' => 69, // Mount ID
			'count' => 1,
			'description' => "Night Waccon mount",
			'points' => 250,
		),
		160 => array(
			'type' => 6,
			'itemid' => 70, // Mount ID
			'count' => 1,
			'description' => "Emerald Waccon mount",
			'points' => 250,
		),
		161 => array(
			'type' => 6,
			'itemid' => 71, // Mount ID
			'count' => 1,
			'description' => "Glooth Glider mount",
			'points' => 250,
		),
		162 => array(
			'type' => 6,
			'itemid' => 72, // Mount ID
			'count' => 1,
			'description' => "Shadow Hart mount",
			'points' => 250,
		),
		163 => array(
			'type' => 6,
			'itemid' => 73, // Mount ID
			'count' => 1,
			'description' => "Black Stag mount",
			'points' => 250,
		),
		164 => array(
			'type' => 6,
			'itemid' => 74, // Mount ID
			'count' => 1,
			'description' => "Emperor Deer mount",
			'points' => 250,
		),
		165 => array(
			'type' => 6,
			'itemid' => 75, // Mount ID
			'count' => 1,
			'description' => "Flitterkatzen mount",
			'points' => 220,
		),
		166 => array(
			'type' => 6,
			'itemid' => 76, // Mount ID
			'count' => 1,
			'description' => "Venompaw mount",
			'points' => 220,
		),
		167 => array(
			'type' => 6,
			'itemid' => 77, // Mount ID
			'count' => 1,
			'description' => "Batcat mount",
			'points' => 220,
		),
		168 => array(
			'type' => 6,
			'itemid' => 78, // Mount ID
			'count' => 1,
			'description' => "Sea Devil mount",
			'points' => 200,
		),
		169 => array(
			'type' => 6,
			'itemid' => 79, // Mount ID
			'count' => 1,
			'description' => "Coralripper mount",
			'points' => 200,
		),
		170 => array(
			'type' => 6,
			'itemid' => 80, // Mount ID
			'count' => 1,
			'description' => "Plumfish mount",
			'points' => 200,
		),
		171 => array(
			'type' => 6,
			'itemid' => 81, // Mount ID
			'count' => 1,
			'description' => "Goronga mount",
			'points' => 200,
		),
		172 => array(
			'type' => 6,
			'itemid' => 82, // Mount ID
			'count' => 1,
			'description' => "Noctungra mount",
			'points' => 200,
		),
		173 => array(
			'type' => 6,
			'itemid' => 83, // Mount ID
			'count' => 1,
			'description' => "Silverneck mount",
			'points' => 200,
		),
		174 => array(
			'type' => 6,
			'itemid' => 84, // Mount ID
			'count' => 1,
			'description' => "Slagsnare mount",
			'points' => 200,
		),
		175 => array(
			'type' => 6,
			'itemid' => 85, // Mount ID
			'count' => 1,
			'description' => "Nightstinger mount",
			'points' => 200,
		),
		176 => array(
			'type' => 6,
			'itemid' => 86, // Mount ID
			'count' => 1,
			'description' => "Razorcreep mount",
			'points' => 200,
		),
		177 => array(
			'type' => 6,
			'itemid' => 87, // Mount ID
			'count' => 1,
			'description' => "Rift Runner mount",
			'points' => 200,
		),
		178 => array(
			'type' => 6,
			'itemid' => 88, // Mount ID
			'count' => 1,
			'description' => "Nightdweller mount",
			'points' => 200,
		),
		179 => array(
			'type' => 6,
			'itemid' => 89, // Mount ID
			'count' => 1,
			'description' => "Frostflare mount",
			'points' => 200,
		),
		180 => array(
			'type' => 6,
			'itemid' => 90, // Mount ID
			'count' => 1,
			'description' => "Cinderhoof mount",
			'points' => 200,
		),
		181 => array(
			'type' => 6,
			'itemid' => 91, // Mount ID
			'count' => 1,
			'description' => "Mouldpincer mount",
			'points' => 200,
		),
		182 => array(
			'type' => 6,
			'itemid' => 92, // Mount ID
			'count' => 1,
			'description' => "Bloodcurl mount",
			'points' => 200,
		),
		183 => array(
			'type' => 6,
			'itemid' => 93, // Mount ID
			'count' => 1,
			'description' => "Leafscuttler mount",
			'points' => 200,
		),
		184 => array(
			'type' => 6,
			'itemid' => 94, // Mount ID
			'count' => 1,
			'description' => "Sparkion mount",
			'points' => 220,
		),
		185 => array(
			'type' => 6,
			'itemid' => 95, // Mount ID
			'count' => 1,
			'description' => "Swamp Snapper mount",
			'points' => 220,
		),
		186 => array(
			'type' => 6,
			'itemid' => 96, // Mount ID
			'count' => 1,
			'description' => "Mould Shell mount",
			'points' => 220,
		),
		187 => array(
			'type' => 6,
			'itemid' => 97, // Mount ID
			'count' => 1,
			'description' => "Reed Lurker mount",
			'points' => 220,
		),
		188 => array(
			'type' => 6,
			'itemid' => 98, // Mount ID
			'count' => 1,
			'description' => "Neon Sparkid mount",
			'points' => 200,
		),
		189 => array(
			'type' => 6,
			'itemid' => 99, // Mount ID
			'count' => 1,
			'description' => "Vortexion mount",
			'points' => 200,
		),
		190 => array(
			'type' => 6,
			'itemid' => 100, // Mount ID
			'count' => 1,
			'description' => "Ivory Fang mount",
			'points' => 200,
		),
		191 => array(
			'type' => 6,
			'itemid' => 101, // Mount ID
			'count' => 1,
			'description' => "Shadow Claw mount",
			'points' => 200,
		),
		192 => array(
			'type' => 6,
			'itemid' => 102, // Mount ID
			'count' => 1,
			'description' => "Snow Pelt mount",
			'points' => 200,
		),
		193 => array(
			'type' => 1,
			'itemid' => 25177, // Item to display on page
			'count' => 1,
			'description' => "Earthheart Cuirass +4 Sword +8% Earth -8% Fire - Knights level 200",
			'points' => 250,
		),
		194 => array(
			'type' => 1,
			'itemid' => 24772, // Item to display on page
			'count' => 1,
			'description' => "Enchanted Werewolf Helmet +2 Distance +4% Physical - Paladins level 100",
			'points' => 250,
		),
		195 => array(
			'type' => 1,
			'itemid' => 24771, // Item to display on page
			'count' => 1,
			'description' => "Enchanted Werewolf Helmet +2 Axe +4% Physical - Knights level 100",
			'points' => 250,
		),
		196 => array(
			'type' => 1,
			'itemid' => 24770, // Item to display on page
			'count' => 1,
			'description' => "Enchanted Werewolf Helmet +2 Sword +4% Physical - Knights level 100",
			'points' => 250,
		),
		197 => array(
			'type' => 1,
			'itemid' => 24769, // Item to display on page
			'count' => 1,
			'description' => "Enchanted Werewolf Helmet +2 Club +4% Physical - Knights level 100",
			'points' => 250,
		),
		199 => array(
			'type' => 1,
			'itemid' => 24744, // Item to display on page
			'count' => 1,
			'description' => "Enchanted Werewolf Helmet +2 Magic Level +4% Physical - Sorcerers & Druids level 100",
			'points' => 250,
		),
		200 => array(
			'type' => 1,
			'itemid' => 36412, // Item to display on page
			'count' => 1,
			'description' => "Terra Helmet +2 Sword +2 Axe +2 Club +5% Physical +5% Earth - Knights level 230",
			'points' => 350,
		),
		201 => array(
			'type' => 1,
			'itemid' => 25178, // Item to display on page
			'count' => 1,
			'description' => "Earthheart Hauberk +4 Axe +8% Earth -8% Fire - Knights level 200",
			'points' => 250,
		),
		202 => array(
			'type' => 1,
			'itemid' => 25179, // Item to display on page
			'count' => 1,
			'description' => "Earthheart Platemail +4 Club +8% Earth -8% Fire - Knights level 200",
			'points' => 250,
		),
		203 => array(
			'type' => 1,
			'itemid' => 25187, // Item to display on page
			'count' => 1,
			'description' => "Eartsoul Tabard +4 Distance +8% Earth -8% Fire - Paladins level 200",
			'points' => 250,
		),
		204 => array(
			'type' => 1,
			'itemid' => 32419, // Item to display on page
			'count' => 1,
			'description' => "Falcon Plate +4 Shielding +12% Physical - Knights lvl 300",
			'points' => 350,
		),
		205 => array(
			'type' => 1,
			'itemid' => 25174, // Item to display on page
			'count' => 1,
			'description' => "Fireheart Cuirass +4 Sword +8% Fire -8% Ice - Knights lvl 200",
			'points' => 250,
		),
		206 => array(
			'type' => 1,
			'itemid' => 25175, // Item to display on page
			'count' => 1,
			'description' => "Fireheart Hauberk +4 axe +8% Fire -8% Ice - Knights lvl 200",
			'points' => 250,
		),
		207 => array(
			'type' => 1,
			'itemid' => 25176, // Item to display on page
			'count' => 1,
			'description' => "Fireheart Platemail +4 Club +8% Fire -8% Ice - Knights lvl 200",
			'points' => 250,
		),
		208 => array(
			'type' => 1,
			'itemid' => 25186, // Item to display on page
			'count' => 1,
			'description' => "Firesoul Tabard +4 Distance +8% Fire -8% Ice - Paladins lvl 200",
			'points' => 250,
		),
		209 => array(
			'type' => 1,
			'itemid' => 25183, // Item to display on page
			'count' => 1,
			'description' => "Frostheart Cuirass +4 Sword +8% Ice -8% Energy - Knights lvl 200",
			'points' => 250,
		),
		210 => array(
			'type' => 1,
			'itemid' => 25184, // Item to display on page
			'count' => 1,
			'description' => "Frostheart Hauberk +4 Axe +8% Ice -8% Energy - Knights lvl 200",
			'points' => 250,
		),
		211 => array(
			'type' => 1,
			'itemid' => 25185, // Item to display on page
			'count' => 1,
			'description' => "Frostheart Platemail +4 Club +8% Ice -8% Energy - Knights lvl 200",
			'points' => 250,
		),
		212 => array(
			'type' => 1,
			'itemid' => 25189, // Item to display on page
			'count' => 1,
			'description' => "Frostsoul Tabard +4 Distance +8% Ice -8% Energy - Paladins lvl 200",
			'points' => 250,
		),
		213 => array(
			'type' => 1,
			'itemid' => 38929, // Item to display on page
			'count' => 1,
			'description' => "Soulshell +4 Distance +3% Physical +15% Fire - Paladins level 400",
			'points' => 450,
		),
		214 => array(
			'type' => 1,
			'itemid' => 25180, // Item to display on page
			'count' => 1,
			'description' => "Thunderheart Cuirass +4 Sword +8% Energy -8% Earth - Knights lvl 200",
			'points' => 250,
		),
		215 => array(
			'type' => 1,
			'itemid' => 25181, // Item to display on page
			'count' => 1,
			'description' => "Thunderheart Hauberk +4 Axe +8% Energy -8% Earth - Knights lvl 200",
			'points' => 250,
		),
		216 => array(
			'type' => 1,
			'itemid' => 25182, // Item to display on page
			'count' => 1,
			'description' => "Thunderheart Platemail +4 Club +8% Energy -8% Earth - Knights lvl 200",
			'points' => 250,
		),
		217 => array(
			'type' => 1,
			'itemid' => 25188, // Item to display on page
			'count' => 1,
			'description' => "Thundersoul Tabard +4 Distance +8% Energy -8% Earth - Paladins lvl 200",
			'points' => 250,
		),
		218 => array(
			'type' => 1,
			'itemid' => 37463, // Item to display on page
			'count' => 1,
			'description' => "Ghost Chestplate +2 Distance +3% Physical - Paladins lvl 230",
			'points' => 450,
		),
		219 => array(
			'type' => 1,
			'itemid' => 38992, // Item to display on page
			'count' => 1,
			'description' => "Lion Plate +3 Sword +3 Club +3 Axe +6% Physical - Knights level 270",
			'points' => 350,
		),
		220 => array(
			'type' => 1,
			'itemid' => 38930, // Item to display on page
			'count' => 1,
			'description' => "Soulmantle +4 Magic +4% Physical - Sorcerers level 400",
			'points' => 450,
		),
		221 => array(
			'type' => 1,
			'itemid' => 38931, // Item to display on page
			'count' => 1,
			'description' => "Soulshroud +4 Magic +10% Death - Druids level 400",
			'points' => 450,
		),
		222 => array(
			'type' => 1,
			'itemid' => 36413, // Item to display on page
			'count' => 1,
			'description' => "Bear Skin +4 Magic +11% Earth -2% Fire - Druids level 230",
			'points' => 350,
		),
		223 => array(
			'type' => 1,
			'itemid' => 36414, // Item to display on page
			'count' => 1,
			'description' => "Embrace of Nature +4 Distance +11% Ice -3% Energy - Paladins level 220",
			'points' => 350,
		),
		224 => array(
			'type' => 1,
			'itemid' => 36418, // Item to display on page
			'count' => 1,
			'description' => "Toga Mortis +4 Magic +6% Death - Sorcerers level 200",
			'points' => 350,
		),
		225 => array(
			'type' => 1,
			'itemid' => 25191, // Item to display on page
			'count' => 1,
			'description' => "Earthmind Raiment +4 Magic +8% Earth -8% Fire - Sorcerers & Druids 200",
			'points' => 250,
		),
		226 => array(
			'type' => 1,
			'itemid' => 25190, // Item to display on page
			'count' => 1,
			'description' => "Firemind Raiment +4 Magic +8% Fire -8% Ice - Druids & Sorcerers 200",
			'points' => 250,
		),
		227 => array(
			'type' => 1,
			'itemid' => 25193, // Item to display on page
			'count' => 1,
			'description' => "Frostmind Raiment +4 Magic +8% Ice -8% Energy - Druids & Sorcerers 200",
			'points' => 250,
		),
		228 => array(
			'type' => 1,
			'itemid' => 25192, // Item to display on page
			'count' => 1,
			'description' => "Thundemin Raiment +4 Magic +8% Energy -8% Earth - Druids & Sorcerers 200",
			'points' => 250,
		),
		229 => array(
			'type' => 1,
			'itemid' => 32420, // Item to display on page
			'count' => 1,
			'description' => "Falcon Greaves +3 Sword +3 Axe +3 Club +3 Distance +7% Physical +7% Ice - Knights & Paladins 300",
			'points' => 350,
		),
		230 => array(
			'type' => 1,
			'itemid' => 38927, // Item to display on page
			'count' => 1,
			'description' => "Soulshanks +3 Magic +10% Death - Sorcerers 400",
			'points' => 450,
		),
		231 => array(
			'type' => 1,
			'itemid' => 38928, // Item to display on page
			'count' => 1,
			'description' => "Soulstrider +4 Magic +10% Fire - Druids 400",
			'points' => 450,
		),
		232 => array(
			'type' => 1,
			'itemid' => 37452, // Item to display on page
			'count' => 1,
			'description' => "Fabulous Legs +2 Distance +2 Sword +2 Axe +2 Club +4% Physical +2% Fire - Knights & Paladins 225",
			'points' => 450,
		),
		234 => array(
			'type' => 1,
			'itemid' => 38932, // Item to display on page
			'count' => 1,
			'description' => "Pair of Soulwalkers +1 Sword +1 Club +1 Axe +15 Speed +7% Physical +5% Fire - Knights 400",
			'points' => 450,
		),
		235 => array(
			'type' => 1,
			'itemid' => 25412, // Item to display on page
			'count' => 1,
			'description' => "Treader of Torment",
			'points' => 150,
		),
		236 => array(
			'type' => 1,
			'itemid' => 35229, // Item to display on page
			'count' => 1,
			'description' => "Cobra Boots +10 Speed +6% Physical - Knights 220",
			'points' => 350,
		),
		237 => array(
			'type' => 1,
			'itemid' => 38933, // Item to display on page
			'count' => 1,
			'description' => "Pair of Soulstalkers +1 Distance +20 Speed +5% Physical - Paladins 400",
			'points' => 450,
		),
		239 => array(
			'type' => 1,
			'itemid' => 38934, // Item to display on page
			'count' => 1,
			'description' => "Soulbastion +10% Physical +10% Death - Knights level 400",
			'points' => 450,
		),
		240 => array(
			'type' => 1,
			'itemid' => 32422, // Item to display on page
			'count' => 1,
			'description' => "Falcon Escutcheon +7% Physical +15% Fire - Knights & Paladins 300",
			'points' => 350,
		),
		241 => array(
			'type' => 1,
			'itemid' => 32421, // Item to display on page
			'count' => 1,
			'description' => "Falcon Shield +6% Physical +10% Fire - Knights & Paladins 300",
			'points' => 350,
		),
		242 => array(
			'type' => 1,
			'itemid' => 38988, // Item to display on page
			'count' => 1,
			'description' => "Lion Spellbook +4 Magic +3% Physical +7% Ice - Druids & Sorcerers 220",
			'points' => 350,
		),
		243 => array(
			'type' => 1,
			'itemid' => 34058, // Item to display on page
			'count' => 1,
			'description' => "Shoulder Plate +3 Magic +2% Physical +6% Earth - Sorcerers & Druids 180",
			'points' => 450,
		),
		244 => array(
			'type' => 1,
			'itemid' => 8925, // Item to display on page
			'count' => 1,
			'description' => "Solar Axe 52 Attk 29+3 Def One Hand - Knights level 130",
			'points' => 350,
		),
		245 => array(
			'type' => 1,
			'itemid' => 32424, // Item to display on page
			'count' => 1,
			'description' => "Falcon Battleaxe 10 Attk +47 Energy Attk 33 Def +4 Axe Skill, Two Hands - Knights 300",
			'points' => 400,
		),
		246 => array(
			'type' => 1,
			'itemid' => 38920, // Item to display on page
			'count' => 1,
			'description' => "Souleater Axe 10 Attk +47 Ice Attk 34 Def +5 Axe Skill, Two Hands - Knights level 400 ",
			'points' => 450,
		),
		247 => array(
			'type' => 1,
			'itemid' => 35231, // Item to display on page
			'count' => 1,
			'description' => "Cobra Axe Attk 8 +44 Ice Attk 29+2 Def +2 Axe Skill, One Hand - Knights level 220",
			'points' => 400,
		),
		248 => array(
			'type' => 1,
			'itemid' => 39088, // Item to display on page
			'count' => 1,
			'description' => "Lion Axe 8 Attk +44 Earth Attk 31+2 Def +3 Axe Skill, One Hand - Knights level 270",
			'points' => 400,
		),
		249 => array(
			'type' => 1,
			'itemid' => 38919, // Item to display on page
			'count' => 1,
			'description' => "Soulbiter 7 Attk +45 Death Attk 32+3 Def +5 Axe Skill, One Hand - Knights level 400",
			'points' => 450,
		),
		250 => array(
			'type' => 1,
			'itemid' => 37451, // Item to display on page
			'count' => 1,
			'description' => "Phantasmal Axe 8 Attk +49 Fire Attk 32 Def +2 Axe, One Hand - Knights level 180",
			'points' => 450,
		),
		251 => array(
			'type' => 1,
			'itemid' => 38926, // Item to display on page
			'count' => 1,
			'description' => "Soulhexer Ice damage +12% Ice +5 Magic - Druids 400",
			'points' => 450,
		),
		252 => array(
			'type' => 1,
			'itemid' => 32416, // Item to display on page
			'count' => 1,
			'description' => "Falcon Rod Earth damage +8% Energy +3 Magic - Druids level 300",
			'points' => 400,
		),
		253 => array(
			'type' => 1,
			'itemid' => 38986, // Item to display on page
			'count' => 1,
			'description' => "Lion Rod Ice damage +2 Magic - Druids level 270",
			'points' => 400,
		),
		254 => array(
			'type' => 1,
			'itemid' => 32523, // Item to display on page
			'count' => 1,
			'description' => "Deepling Fork Ice damage +8% Holy +2 Magic - Sorcerers & Druids level 230",
			'points' => 350,
		),
		255 => array(
			'type' => 1,
			'itemid' => 35235, // Item to display on page
			'count' => 1,
			'description' => "Cobra rod Earth Damage +2 Magic - Druids level 220",
			'points' => 400,
		),
		256 => array(
			'type' => 1,
			'itemid' => 38921, // Item to display on page
			'count' => 1,
			'description' => "Soulcrusher 6 Attk +46 Ice damage 33+3 Def +5 Club - One Hand - Knights level 400",
			'points' => 400,
		),
		257 => array(
			'type' => 1,
			'itemid' => 38922, // Item to display on page
			'count' => 1,
			'description' => "Soulmaimer 10 Attk +47 Energy damage 35 Def +5 Club - Two Hands - Knights level 400",
			'points' => 400,
		),
		258 => array(
			'type' => 1,
			'itemid' => 32425, // Item to display on page
			'count' => 1,
			'description' => "Falcon Mace 11 Attk +41 Energy damage 33+3 Def +3 Club - One Hand - Knights level 300",
			'points' => 400,
		),
		259 => array(
			'type' => 1,
			'itemid' => 39089, // Item to display on page
			'count' => 1,
			'description' => "Lion Hammer 8 Attk +44 Earth damage 31+2 Def +3 Club - One Hand - Knights level 270",
			'points' => 400,
		),
		260 => array(
			'type' => 1,
			'itemid' => 35230, // Item to display on page
			'count' => 1,
			'description' => "Cobra Club 8 Attk +44 Fire damage 29+2 Def +2 Club - One Hand - Knights level 220",
			'points' => 400,
		),
		261 => array(
			'type' => 1,
			'itemid' => 38925, // Item to display on page
			'count' => 1,
			'description' => "Soultainter Death Damage +12% death +5 Magic - Sorcerers level 400",
			'points' => 450,
		),
		262 => array(
			'type' => 1,
			'itemid' => 32417, // Item to display on page
			'count' => 1,
			'description' => "Falcon Wand Energy damage 8% Fire +3 Magic - Sorcerers level 300",
			'points' => 400,
		),
		263 => array(
			'type' => 1,
			'itemid' => 35234, // Item to display on page
			'count' => 1,
			'description' => "Cobra Wand Energy damage +2 Magic - Sorcerers level 270",
			'points' => 400,
		),
		264 => array(
			'type' => 1,
			'itemid' => 38987, // Item to display on page
			'count' => 1,
			'description' => "Lion Wand Ice damage +2 Magic - Sorcerers level 220",
			'points' => 400,
		),
		265 => array(
			'type' => 1,
			'itemid' => 38923, // Item to display on page
			'count' => 1,
			'description' => "Soulbleeder +8 Attk +5% Hit +7% Holy +4 Distance - Paladins level 400",
			'points' => 450,
		),
		266 => array(
			'type' => 1,
			'itemid' => 38924, // Item to display on page
			'count' => 1,
			'description' => "Soulpiercer +9 Attk +6% Hit +8 Death +4 Distance - Paladins level 400",
			'points' => 450,
		),
		267 => array(
			'type' => 1,
			'itemid' => 32418, // Item to display on page
			'count' => 1,
			'description' => "Falcon Bow +6 Attk +6% Hit +5% Fire +2 Distance - Paladins level 300",
			'points' => 400,
		),
		268 => array(
			'type' => 1,
			'itemid' => 38985, // Item to display on page
			'count' => 1,
			'description' => "Lion Longbow +6 Attk +6% Hit +5% Ice +2 Distance - Paladins level 270",
			'points' => 400,
		),
		269 => array(
			'type' => 1,
			'itemid' => 38917, // Item to display on page
			'count' => 1,
			'description' => "Soulcutter 7 Attk +45 Death damage 32+3 Def +5 Sword - One Hand - Knights level 400",
			'points' => 450,
		),
		270 => array(
			'type' => 1,
			'itemid' => 38918, // Item to display on page
			'count' => 1,
			'description' => "Soulshredder 10 Attk +47 Ice damage 35Def +5 Sword - One Hand - Knights level 400",
			'points' => 450,
		),
		271 => array(
			'type' => 1,
			'itemid' => 32423, // Item to display on page
			'count' => 1,
			'description' => "Falcon Longsword 56 Attk 34 Def +10% Earth +5 Sword - Two Hands - Knights level 300",
			'points' => 400,
		),
		272 => array(
			'type' => 1,
			'itemid' => 38990, // Item to display on page
			'count' => 1,
			'description' => "Lion Longsword 8 Attk +44 Earth Damage 31+2 Def +3 Sword - One Hand - Knights level 270",
			'points' => 400,
		),
		273 => array(
			'type' => 1,
			'itemid' => 36449, // Item to display on page
			'count' => 1,
			'description' => "Tagralt Blade 7 Attk +49 Earth damage 32 Def +3 Sword - Two Hands - Knights level 250",
			'points' => 450,
		),
		278 => array(
			'type' => 1,
			'itemid' => 22409, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Chopper Atk:54, Def:34, axe fighting +3.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		279 => array(
			'type' => 1,
			'itemid' => 22406, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Axe Atk:53, Def:30 +3, axe fighting +1.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		280 => array(
			'type' => 1,
			'itemid' => 22415, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Hammer Atk:55, Def:34, club fighting +3.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		281 => array(
			'type' => 1,
			'itemid' => 22412, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Mace Atk:52, Def:30+3, club fighting +1.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		282 => array(
			'type' => 1,
			'itemid' => 22403, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Slayer Atk:54, Def:35, sword fighting +3.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		283 => array(
			'type' => 1,
			'itemid' => 22400, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Masterblade Atk:52, Def:31 +3, sword fighting +1.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		284 => array(
			'type' => 1,
			'itemid' => 22418, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Bow Range: 7, Atk +6, Hit% +5, distance fighting +3.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		285 => array(
			'type' => 1,
			'itemid' => 22421, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Crossbow Range: 5, Atk +9, Hit% +4, distance fighting +3.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
		286 => array(
			'type' => 1,
			'itemid' => 22424, // item to get in-game
			'count' => 1, // Stack number (5x itemid)
			'description' => "Umbral Master Spellbook Def:20, magic level +4, protection energy +5%, earth +5%, fire +5%, ice +5%.", // Description shown on website
			'points' => 350, // How many points this offer costs
		),
	);

	//////////////////////////
	/// OTServers.eu voting
	//
	// Start by creating an account at OTServers.eu and add your server.
	// You can find your secret token by logging in on OTServers.eu and go to 'MY SERVER' then 'Encourage players to vote'.
	$config['otservers_eu_voting'] = [
		'enabled' => false,
		'simpleVoteUrl' => '', // This url is used if the player isn't logged in.
		'voteUrl' => 'https://api.otservers.eu/vote_link.php',
		'voteCheckUrl' => 'https://api.otservers.eu/vote_check.php',
		'secretToken' => '', // Enter your secret token. Do not share with anyone!
		'landingPage' => '/voting.php?action=reward', // The user will be redirected to this page after voting
		'points' => '1' // Amount of points to give as reward
	];
