<!DOCTYPE html>

<html>

	<head>

		<title>Top</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="main.css" />

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

									<a href="1WelcomeNelogat.php">Home</a>

									<a href="3'TopPlayers.php" class="current-page-item" > TopPlayers </a>

									<a href="8'Rules.php"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

		    <div id="main" action="post" >

			    <div class="topmenu">

			        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			        <button> Search <img src="TW_CSS/img/s.png" alt="Search" style="width:10px;height:10px;"></button>

					<input type="text" placeholder="Search by name" name="searchArgument" id="searchByName">

			      	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
			            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

					<button>Top 10</button>

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

							<tr>

           						<td>1</td>

           						<td>BecaliTheBoss</td>

           						<td>Gigi</td>

           						<td>Becali</td>

           						<td>2000</td>

        					</tr>

         					<tr>

           						<td>2</td>

           						<td>TheKing</td>

           						<td>Andrei</td>

           						<td>Boistean</td>

           						<td>1975</td>

         					</tr>

         					<tr>

           						<td>3</td>

           						<td>Terminator</td>

           						<td>Claudiu</td>

           						<td>Mocanu</td>

           						<td>1975</td>

         					</tr>

         					<tr>

           						<td>4</td>

           						<td>Lord</td>

           						<td>George</td>

           						<td>Balan</td>

           						<td>1850</td>

         					</tr>

         					<tr>

           						<td>5</td>

           						<td>Striker</td>

           						<td>Robert</td>

           						<td>Giovanni</td>

           						<td>1800</td>

         					</tr>

         					<tr>

           						<td>6</td>

           						<td>Clau</td>

           						<td>Claudiu</td>

           						<td>Tonea</td>

           						<td>1700</td>

         					</tr>

         					<tr>

           						<td>7</td>

           						<td>Demoler</td>
								
           						<td>Codrin</td>

           						<td>Balan</td>

           						<td >   0</td>

         					</tr>

  						</tbody>

  					</table>

 					<script type="text/javascript">

						var xmlHttpRequest;

						if(window.XMLHttpRequest){
							xmlHttpRequest=new XMLHttpRequest();
						} else if(window.activeXObject){
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