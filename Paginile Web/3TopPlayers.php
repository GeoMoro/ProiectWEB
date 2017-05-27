<!DOCTYPE html>
<?php
	
	include "TWVerificare.php";

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);
			
	    if(isset($_COOKIE['UserID'])){
			$uid =  $_COOKIE["UserID"];
		}
		
	?>
<html>

	<head>

		<title>Top</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="TW_CSS/css/main.css" />

	</head>

	<body>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

								<nav>

									<a href="2WelcomeLogat.php">Home</a>

									<a href="3TopPlayers.php" class="current-page-item" > TopPlayers </a>

									<a href="8Rules.php"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

		    <div id="main" >

			    <div class="topmenu">
<form action="" method='post'>
			        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			        <button id="Submit" name="Submit" Value="Register" type="Submit"> Search <img src="TW_CSS/img/s.png" alt="Search" style="width:10px;height:10px;"></button>

					<input type="text" id="searchByName" name="searchByName" placeholder="Search by name" >

			      	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		

			        <span>  Your rank: <?php $rank = getRank($uid); echo $rank;?> </span>

			        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

					<button id="Submit" name="Submit1" Value="Register" type="Submit">Top 10</button>
</form>
			    </div>

				<div style="overflow-x:auto">

					<table>

				    	<thead>

                        	<tr>

                            	<th>Top No.</th>

    							<th>UserName</th>

    							<th>First Name</th>

    							<th>Last Name</th>

    							<th>Score</th>

  							</tr>

  						</thead>

  						<tbody>
	
							<?php 
								if(isset($_POST['Submit'])){
									$UserSearch = $_POST["searchByName"];
									getTopByName($UserSearch);
								}
								else
									if(isset($_POST['Submit1']))
									{
										getTop10();
									}
									else
										getTop();
							?>

  						</tbody>

  					</table>

 					<script type="text/javascript">

						var xmlHttpRequest;

						if(window.XMLHttpRequest){
							xmlHttpRequest=new XMLHttpRequest();
						} else  if(window.activeXObject){
									xmlHttpRequest=new activeXObject("MICROSOFT.XMLHTTP");
							    }

						function sendMessageToServer(){
							xmlHttpRequest.open("POST","Top?name="+document.getElementById("searchByName").value, true);
							xmlHttpRequest.onreadystatechange=receiveMessageFromServer;
							xmlHttpRequest.send();
							document.getElementById("searchByName"); // introduc numele
						}

						function receiveMessageFromServer(){
							if(xmlHttpRequest.readyState==4 && xmlHttpRequest.status==200)
								document.getElementByID("RezultatTabela").value=xmlHttpRequest.reponseXML.getElementByTagName("responseFromServer"[0].txt)
							}

					</script>

				</div>

			</div>

		</div>

		<div id="footer-wrapper">

			<div class="container">

				<div class="row">

					<div class="8u 12u(mobile)"></div>

					<div class="4u 12u(mobile)"></div>

				</div>

				<div class="row">

					<div class="12u">

						<div id="copyright"> Copyright © 2017 BomberBot |	Powered by UAIC/2B3/VMMMteam </div>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>