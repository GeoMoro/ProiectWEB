<?php
   
   function validPassword($pass) {

	    if (!ctype_alnum(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', str_replace(' ', '', str_replace('@', '', str_replace('&', '', str_replace('#', '', $pass))))))))))

			return 0;

		else 

			if(strlen($pass)<5)

				return 0;

	    return 1;

   }


   function validPass($pass1, $pass2) {

		if($pass1==$pass2)

			return 1;

		return 0;

	}


	function validNume($p_nume) {

		if(!$p_nume)

		   return 0;

		else 

			if(!preg_match('/^[a-zA-Z ]*$/', $p_nume))

				return 0;

		return 1;

	}


	function validPremume($p_prenume) {

		if (!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume))))

			return 0;

		if(strlen(str_replace(' ','',str_replace('-', '', $p_prenume)))==0)

			return -1;

		return 1;

	}


	function validUserName($p_username) {

		if (!ctype_alnum(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username))))))

			return 0;

		if(strlen(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username)))))<4)

			return -1;

		return 1;

	}


	function existUser($user,$pass) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

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

				return $rezultat;

			}

	}


	function getID($user,$pass) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

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

				return $rezultat;

			}

	}


	function getTop() {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = 'select \'<td> \'||Username||\'</td> <td> \'||First_Name||\'</td> <td>\'||last_name||\'</td> <td> \'||Rank||\' </td>\' from players order by rank desc';

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				$index = 0;

				while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {

					$index = $index + 1;

					echo '<tr> <td> '.$index.' </td> '.$row[0].'</tr>';

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

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				$index = 0;

				while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {

					$index = $index + 1;

					echo '<tr> <td> '.$index.' </td> '.$row[0].'</tr>';

				}

				if($index == 0){

					echo '<tr> <td> Nu </td> <td> exista </td> <td> un </td> <td> asemenea </td> <td> player</td> </tr>';

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

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				$index = 0;

				while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {

					$index = $index + 1;

					echo '<tr> <td> '.$index.' </td> '.$row[0].'</tr>';

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

				$sql = 'insert into Players VALUES ('.$ID.', \''.$username.'\', \''.$firstname.'\', \''.$lastname.'\', \''.$pass.'\', 0, NULL, \''.$veteran.'\', '.$ID.', 0, 0, 0, SYSDATE)';

				$result = oci_parse($connection, $sql);

				oci_execute($result);

				oci_close($connection);

			}

	}


	function getUserName($uid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection) {

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getUN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

			}

	}


	function getRank($uid) {

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

	}


	function getFirstName($uid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getFN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

			}

	}


	function getLastName($uid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getLN(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

			}

	}


	function getUserPass($uid) {

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getPass(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

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

		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');

		if(!$connection){

			echo "Connection failed. Please try again";

			return -1;

		}

		else{

				$sql = ' begin :rez := getRobotName(:ID); end;';

				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $usid,50,SQLT_INT);

				oci_bind_by_name($result, ':rez', $user,50);

				oci_execute($result);

			//	oci_free_statement($result);

				oci_close($connection);

				return $user;

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

?>