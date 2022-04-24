<?php require_once 'engine/init.php'; include 'layout/overall/header_myacc_no_container_fc.php'; ?>

<div class="inner" style="border:1px solid gray">
		<br>
<h1>Downloads <a href="myaccount.php" style="cursor:pointer"><i class="fa fa-arrow-circle-left"></i></a></h1>  
<span class="informer__dline"></span>
<p style="font-size:16px"> In order to play on server, <i class='fab fa-windows'></i> download our client.</p>
<p style="font-size:16px"> <font color="red"> Admins:</font> Enter on download.php page, and edit URLS for your clients, after this, delete this line</p>
<center><img src="layout/img/hellgrave_client.png" style="width:800px"></center><br>
<?php
                                                                                    $download_links = array(
                                                                                      "client1" => "Direct URL",
                                                                                      "client2" => "Direct URL",
																					  "client3" => "Direct URL",
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
                                                                                      <select id="client" class="form-control" name="client" style="width:400px">
                                                                                        <option value="client1">Client 1 Windows</option>
                                                                                        <option value="client2">Client 2 Linux</option>
																						<option value="client3">Client 3 Other</option>
                                                                                      </select>
                                                                                      <br><br>
                                                                                     <center> <input type="submit" class="btn btn-primary" value="Download" style="width:200px"></center>
                                                                                    </form></center>



</div>



<?php
include 'layout/overall/footer_myaccount.php'; ?>
