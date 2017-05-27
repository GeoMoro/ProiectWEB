<?php
   function validPass($pass1, $pass2)  // V
	{
		if($pass1==$pass2)
			return 1;
		
		return 0;
	}
	function validNume($p_nume)  // V
	{
		if(!$p_nume)
		   return 0;
		else 
			if(!preg_match('/^[a-zA-Z ]*$/', $p_nume))
				return 0;
		return 1;
	}
	

	function validPremume($p_prenume)  // V
	{
		if (!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume))))
			return 0;
		if(strlen(str_replace(' ','',str_replace('-', '', $p_prenume)))==0)
			return -1;
		return 1;
	}
	
	function validUserName($p_username)  // V
	{
		if (!ctype_alnum(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username))))))
			return 0;
		if(strlen(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username)))))<4)
			return -1;
		return 1;
	}
	
	function existUser($user,$pass)
	{
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
				
				oci_free_statement($result);
				
				oci_close($connection);
				
				return $rezultat;
				
			}
	}
	
	function getID($user,$pass)
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
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
				
				oci_free_statement($result);
				
				oci_close($connection);
				
				return $rezultat;
				
			}
	}
	
	function getTop()
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
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

				oci_free_statement($result);
				oci_close($connection);
			}
	}
	
	function getTopByName($Usersearch)
	{
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

				oci_free_statement($result);
				oci_close($connection);
			}
	}
	
	function getTop10()
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
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

				oci_free_statement($result);
				oci_close($connection);
			}
	}
	
	function Register($username, $firstname, $lastname, $pass)
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
			echo "Connection failed. Please try again";
			return -1;
		}
		else{
				
				//$sql1 = 'begin :rez := getNrOfPlayers(); end;';
				//$result1 = oci_parse($connection, $sql1);
				
				//oci_bind_by_name($result1, ':rez', $ID ,50,SQLT_INT);
				
				//oci_execute($result1);
				
				//$ID = $ID + 1;
				$sql = 'begin addPlayer(getNrOfPlayers()+1, :UserName, :FirstName, :LastName, :Passw); end;';
				$result = oci_parse($connection, $sql);
				oci_free_statement($result);

				oci_bind_by_name($result, ':UserName', $username,50);
				oci_bind_by_name($result, ':FirstName', $firstname,50);
				oci_bind_by_name($result, ':LastName', $lastname,50);
				oci_bind_by_name($result, ':Passw', $pass,50);
				//oci_bind_by_name($result, ':ID', $ID,50,SQLT_INT);
				
				oci_execute($result);
				oci_close($connection);
			}
	}
	
	function getUserName($uid)
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
			echo "Connection failed. Please try again";
			return -1;
		}
		else{
				
				$sql = ' begin :rez := getUN(:ID); end;';
				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);
				oci_bind_by_name($result, ':rez', $user,50);
				
				oci_execute($result);
				
				oci_free_statement($result);
				
				oci_close($connection);
				
				return $user;
				
			}
	}
	
	function getRank($uid)
	{
		$connection = oci_connect('ProjIP', 'ProjIP', 'localhost/xe');
														
		if(!$connection){
			echo "Connection failed. Please try again";
			return -1;
		}
		else{
				
				$sql = ' begin :rez := getRank(:ID); end;';
				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':ID', $uid,50,SQLT_INT);
				oci_bind_by_name($result, ':rez', $user,50);
				
				oci_execute($result);
				
				oci_free_statement($result);
				
				oci_close($connection);
				
				return $user;
				
			}
	}
?>