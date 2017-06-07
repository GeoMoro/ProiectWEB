<?php
class TWVerificare
{
	function getUserName($uid) {
        $basket = KITE::getInstance('basket');
       $connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(UserName,'-1');

		}

		else{

				$sql = ' begin :rez := getUN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserName,$user);

			}

	}

		function ExistAnotherUser($UserName) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(AnotherUserName,'-1');

		}

		else{

				$sql = ' begin select getNrOfSameUsers(username) into :rez from players where username=\''.$UserName.'\'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(AnotherUserName,$rez);

			}

	}
	
		function getUserPass($uid) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			$basket->set(UserPass,'-1');

		}

		else{

				$sql = ' begin :rez := getPass(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserPass,$user);

			}

	}

		function existUser($user,$pass) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			$basket->set(existUser,'-1');

		}

		else{

				$sql = 'begin :rez := checklogg(:UserName,:Passw); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rezultat,50,SQLT_INT);

				oci_bind_by_name($result, ':UserName', $user,50);

				oci_bind_by_name($result, ':Passw', $pass,50);

				oci_execute($result);

				//oci_free_statement($result);

				oci_close($connection);

				$basket->set(existUser,$rezultat);

			}

	}

	

	function getFirstName($uid) {
		$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			$basket->set(FirstName,'-1');

		}

		else{

				$sql = ' begin :rez := getFN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(FirstName,$user);

			}

	}


	function getLastName($uid) {
		$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			$basket->set(LastName,'-1');

		}

		else{

				$sql = ' begin :rez := getLN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(LastName,$user);

			}

	}



		function getID($user,$pass) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(getID,'-1');

		}

		else{

				$sql = 'begin :rez := returnID(:UserName,:Passw); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rezultat,50,SQLT_INT);

				oci_bind_by_name($result, ':UserName', $user,50);

				oci_bind_by_name($result, ':Passw', $pass,50);

				oci_execute($result);

				//oci_free_statement($result);

				oci_close($connection);

				$basket->set(getID,$rezultat);

			}

	}

		function getUserLogg($uid) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(UserLogg,'-1');

		}

		else{

				$sql = ' begin select logged into :rez from players where ID='.$uid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserLogg,$rez);

			}

	}

		function getUserMaterial($usid) {
			$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(UserMaterial,'-1');

		}

		else{

				$sql = ' begin select Material into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserMaterial,$rez);

			}

	}
	
	function getUserTool($usid) {
		$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(UserTool,'-1');

		}

		else{

				$sql = ' begin select Tool into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserTool,$rez);

			}

	}
	
	function getUserWeapon($usid) {
		$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(UserWeapon,'-1');

		}

		else{

				$sql = ' begin select Weapon into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez, 50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(UserWeapon,$rez);

			}

	}

	function getRank($uid) {
		$basket = KITE::getInstance('basket');

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			$basket->set(Rank,'-1');

		}

		else{

				$sql = ' begin :rez := getRank(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(Rank,$user);

			}

	}


		function UpdatePass($UID,$NewPass) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update players SET password = \''.$NewPass.'\' WHERE ID = '.$UID;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);
		}

	}



	function getTop() {
		
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

		}

		else{

				$sql = 'select \'<td> \'||Username||\'</td> <td> \'||First_Name||\'</td> <td>\'||last_name||\'</td> <td> \'||Rank||\' </td>\' as "data" from players order by rank desc';
				$sql2 = 'select count(*) as "numar" from players';
				$result = oci_parse($connection, $sql);
				$result2 = oci_parse($connection, $sql2);
				oci_execute($result);
				oci_execute($result2);
				$basket = KITE::getInstance('basket');
				$id=0;
				$ceva=oci_fetch($result2);
				$basket->set('NumarSelect',oci_result($result2, 'numar'));
				while (($row = oci_fetch_array($result, OCI_NUM)) != false) {
					$key='id'.$id;
    				$basket->set($key,$row[0]);
					$id++;
				}
			//	oci_free_statement($result);

				oci_close($connection);

			}

	}


	function getTopByName($Usersearch) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'select \'<td> \'||Username||\'</td> <td> \'||First_Name||\'</td> <td>\'||last_name||\'</td> <td> \'||Rank||\' </td>\' from players where username like \'%'.$Usersearch.'%\' order by rank desc';

				$sql2 = 'select count(*) as "numar" from players';
				$result = oci_parse($connection, $sql);
				$result2 = oci_parse($connection, $sql2);
				oci_execute($result);
				oci_execute($result2);
				$basket = KITE::getInstance('basket');
				$id=0;
				$ceva=oci_fetch($result2);
				$basket->set('NumarSelect',oci_result($result2, 'numar'));
				while (($row = oci_fetch_array($result, OCI_NUM)) != false) {
					$key='id'.$id;
    				$basket->set($key,$row[0]);
					$id++;
				}
			//	oci_free_statement($result);

				oci_close($connection);

			}

	}


	function getTop10() {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'select \'<td> \'||Username||\'</td> <td> \'||First_Name||\'</td> <td>\'||last_name||\'</td> <td> \'||Rank||\' </td>\' from players where rownum < 11 order by rank desc';
				$sql2 = 'select count(*) as "numar" from players';
				$result = oci_parse($connection, $sql);
				$result2 = oci_parse($connection, $sql2);
				oci_execute($result);
				oci_execute($result2);
				$basket = KITE::getInstance('basket');
				$id=0;
				$ceva=oci_fetch($result2);
				$basket->set('NumarSelect',oci_result($result2, 'numar'));
				while (($row = oci_fetch_array($result, OCI_NUM)) != false) {
					$key='id'.$id;
    				$basket->set($key,$row[0]);
					$id++;
				}
			//	oci_free_statement($result);

				oci_close($connection);

			}

	}


	function Register($username, $firstname, $lastname, $pass) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql1 = 'begin :rez := getNrOfPlayers(); end;';

				$result1 = oci_parse($connection, $sql1);

				oci_bind_by_name($result1, ':rez', $ID ,50,SQLT_INT);

				oci_execute($result1);

				$ID = $ID + 1;

				$veteran = 'N';

				$sql = 'insert into Players VALUES ('.$ID.', \''.$username.'\', \''.$firstname.'\', \''.$lastname.'\', \''.$pass.'\', 0, NULL, \''.$veteran.'\', '.$ID.', 0, 0, 0, SYSDATE, 1)';

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				oci_close($connection);

			}

	}



	/*function getRank($uid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getRank(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

			}

	}*/


	function UpdateUserName($UID,$NewUserN) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update players SET username = \''.$NewUserN.'\' WHERE ID = '.$UID;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}

	}


	function getRobotName($usid) {
		$basket = KITE::getInstance('basket');
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			$basket->set(RobotName,'-1');

		}

		else{

				$sql = ' begin :rez := getRobotName(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $usid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				$basket->set(RobotName,$user);

			}

	}


	function setRobotName($usid,$Name) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update robots SET robotname = \''.$Name.'\' WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}

	}


	function setRobotMaterial($usid,$Name) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update robots SET material = \''.$Name.'\' WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}

	}


	function setRobotTool($usid,$Name) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update robots SET tool = \''.$Name.'\' WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}

	}


	function setRobotWeapon($usid,$Name) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update robots SET weapon = \''.$Name.'\' WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}

	}
	
	function getTopNames() {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'select Username from players order by username asc';

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				$index = 0;

				while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {

					$a[$index] = $row[0];

					$index = $index + 1;

				}

				//$lengthOfArray = $index;

			//	oci_free_statement($result);

				oci_close($connection);

				return $a;

			}

	}
	
	function setPlayerOn($usid) {
		
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update players SET Logged = 1 WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}
		
	}
	
	function setPlayerOff($usid) {
		
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'update players SET Logged = 0 WHERE ID = '.$usid;

				$result = oci_parse($connection, $sql);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

		}
		
	}
	



/*	function getUserMaterial($usid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin select Material into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $rez;

			}

	}
	
	function getUserTool($usid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin select Tool into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $rez;

			}

	}
	
	function getUserWeapon($usid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin select Weapon into :rez from robots where ID='.$usid.'; end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rez, 50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $rez;

			}

	}*/
	function WinGame($usid) {
 

 
    $connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
 

 
    if(!$connection){
 

 
      echo "Connection failed. Please try again";
 

 
      return -1;
 

 
    }
 

 
    else{
 

 
        $sql = 'update players SET Victories = Victories + 1,Rank = Rank + 25 WHERE ID = '.$usid;
 

 
        $result = oci_parse($connection, $sql);
 

 
        oci_execute($result);
 

 
      //  oci_free_statement($result);
 

 
        oci_close($connection);
 

 
    }
 

 
  }
 

 

 
  function DrawGame($usid1,$usid2) {
 

 
    $connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
 

 
    if(!$connection){
 

 
      echo "Connection failed. Please try again";
 

 
      return -1;
  
    }
 

 
    else{
 

 
        $sql = 'update players SET Victories = Victories + 1,Rank = Rank + 25 WHERE ID = '.$usid1.' or ID ='.$usid2;
 

 
        $result = oci_parse($connection, $sql);
 

 
        oci_execute($result);
 

 
      //  oci_free_statement($result);
 

 
        oci_close($connection);
 

 
    }
 

 
  }
 

 

 
  function LostGame($usid) {
 

 
    $connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
 

 
    if(!$connection){
 

 
      echo "Connection failed. Please try again";
 

 
      return -1;
 

 
    }
 

 
    else{
 

 
        $sql1 = ' begin select getRank('.$usid.') into :rez from players where ID='.$usid.'; end;';
 

 
        $result1 = oci_parse($connection, $sql1);
 

 
        oci_bind_by_name($result1, ':rez', $rank,50);
 

 
        oci_execute($result1);
 
 
        if($rank>=25)
 

 
          $rank = $rank - 25;
 

 
        $sql = 'update players SET Loses = Loses + 1,Rank = '.$rank.' WHERE ID = '.$usid;
 

 
        $result = oci_parse($connection, $sql);
 

 
        oci_execute($result);
 

 
      //  oci_free_statement($result);
 

 
        oci_close($connection);
 

 
    }
 

 
  }
 

 
	
}	
?>