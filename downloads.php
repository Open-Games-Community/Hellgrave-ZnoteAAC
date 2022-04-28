<?php require_once 'engine/init.php'; include 'layout/overall/header_myacc_no_container_fc.php'; ?>

<div class="inner" style="border:1px solid gray">
		<br>
<h1>Downloads <a href="myaccount.php" style="cursor:pointer"><i class="fa fa-arrow-circle-left"></i></a></h1>  
<span class="informer__dline"></span>
<p style="font-size:16px">&nbsp;  In order to play on server, <i class='fab fa-windows'></i> download our client.</p>
<p style="font-size:16px">&nbsp;  Download Our Launcher Client <font color="orange">( Windows Defender > Exclusion )</font> Or the Game Client Directly</p>
<p style="font-size:16px">&nbsp;  Note: Is possible your antivirus detect Launcher as a Virus, the launcher is coded in c++ in order to download the game client and update it,</p>
<p style="font-size:16px">&nbsp; there is not any other action from the launcher.</p>
<p style="font-size:16px">&nbsp;  <a href="https://www.virustotal.com/gui/file/f5b2c92f87a12452223c592c958e42b4a277f0546fb2144179836e5250dbcca1/detection">Here</a> you will find a result of analysis. ( 3 security vendors and no sandboxes flagged this file as malicious ). </p>
<?php
                                                                                    $download_links = array(
                                                                                      "Launcher" => "http://hellgrave.ddns.net/download/launcher.rar",
                                                                                      "Direct_Client" => "http://hellgrave.ddns.net/download/Hellgrave_Client.rar",
                                                                                    );

                                                                                    $download_url = false;
                                                                                    if (isset($_GET['client']) && isset($download_links[$_GET['client']])) {
                                                                                      $download_url = $download_links[$_GET['client']];
                                                                                      header("Location: {$download_url}");
                                                                                      die();
                                                                                    }
                                                                                    ?>


<center><form action="" method="GET" target="_blank">
                                                                                      <label for="client"></label>
                                                                                      <select id="client" class="form-control" name="client" style="width:400px;color:white">
                                                                                        <option value="Launcher" style="color:white">Launcher</option>
                                                                                        <option value="Direct_Client" style="color:white">Direct Client</option>
																						
                                                                                      </select>
                                                                                      <br><br>
                                                                                     <center> <input type="submit" class="btn btn-primary" value="Download" style="width:200px"></center>
                                                                                    </form></center>
																					
																					<br></br>
																					<center><img src="layout/img/hellgrave_launcher.png" style="width:800px"></center><br>



</div>



<?php
include 'layout/overall/footer_myaccount.php'; ?>
