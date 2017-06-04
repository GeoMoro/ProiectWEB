<!DOCTYPE html>

<html>

	<head>

		<title>Top</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="http://localhost/kite/assets/css/main.css" />

	</head>

	<body>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="http://localhost/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

								<nav>

									<a href="main" class="current-page-item"> Home </a>

									<a href="top" > TopPlayers </a>

									<a href="rules"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

		    <div id="main" action="post" >

			    <div class="topmenu">

			       <form action="" method='post'>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<button id="Submit" name="Submit" Value="Register" type="Submit"> Search <img src="http://localhost/kite/assets/img/s.png" alt="Search" style="width:10px;height:10px;"></button>

						<input type="text" id="searchByName" name="searchByName" placeholder="Search by UserName" onkeyup="showHint(this.value)" >

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

						<button id="Submit" name="Submit1" Value="Register" type="Submit">Top 10</button>

					</form>

					<p>Do you wanna search: <span id="txtHint" style="color:blue"></span></p>

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

								$basket = KITE::getInstance('basket');
								$index = 0;
								$nrMaxim=$basket->NumarSelect;
								for($index=0;$index<$nrMaxim;$index++) {
									$key='id'.$index;

											echo '<tr> <td> '.$index.' </td> '.$basket->get($key);
											echo '</tr>';
								}
								

							?>

  						</tbody>

  					</table>

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
		
		<script>

			function showHint(str) {

				if (str.length == 0) { 

					document.getElementById("txtHint").innerHTML = "";

					return;

				} else {

					var xmlhttp = new XMLHttpRequest();

					xmlhttp.onreadystatechange = function() {

						if (this.readyState == 4 && this.status == 200) {

							document.getElementById("txtHint").innerHTML = this.responseText;

						}

					};

					xmlhttp.open("GET", "gethint.php?q="+str, true);

					xmlhttp.send();

				}

			}

		</script>

	</body>

</html>