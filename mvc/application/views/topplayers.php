<?php $this->load->view('topmenu'); ?>
<?php

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID'])){

		$uid =  $_COOKIE["UserID"];

	}

?>

		    <div id="main" >

			    <div class="topmenu">

					<form action="" method='post'>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<button id="Submit" name="Submit" Value="Register" type="Submit"> Search <img src="http://localhost/tw/assets/img/s.png" alt="Search" style="width:10px;height:10px;"></button>

						<input type="text" id="searchByName" name="searchByName" placeholder="Search by UserName" onkeyup="showHint(this.value)" >

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<span>  Your rank: <?php $rank = getRank($uid); echo filter($rank);?> </span>

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

								if(isset($_POST['Submit'])){

									$UserSearch = $_POST["searchByName"];

									if(validNume($UserSearch) == 1) {

										getTopByName($UserSearch);

									}

								}

								else

									if(isset($_POST['Submit1']))

									{

										getTop10();

									}

									else {

										getTop();

									}

							?>

  						</tbody>

  					</table>

				</div>

			</div>

		</div>