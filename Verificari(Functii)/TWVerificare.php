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
				
				$sql = 'begin  :rez := checklogg(:UserName,:Passw); end;';
				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rezultat);
				oci_bind_by_name($result, ':UserName', $user);
				oci_bind_by_name($result, ':Passw', $pass);
				
				oci_execute($result);
				//$rezultat = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
				oci_close($connection);
				return $rezultat;
				//oci_close($connection);
				
			   
				/*if(!$result){
					return 0;
					$e1 = oci_error($connection);
					trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);
				}
                else {
					oci_execute($result);
					
					$rez = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
					return $rez;
				}*/
				
				return 0;
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
				
				$sql = 'begin  :rez := returnID(:UserName,:Passw); end;';
				$result = oci_parse($connection, $sql);

				oci_bind_by_name($result, ':rez', $rezultat);
				oci_bind_by_name($result, ':UserName', $user);
				oci_bind_by_name($result, ':Passw', $pass);
				
				oci_execute($result);
				//$rezultat = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
				oci_close($connection);
				return $rezultat;
				//oci_close($connection);
				
			   
				/*if(!$result){
					return 0;
					$e1 = oci_error($connection);
					trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);
				}
                else {
					oci_execute($result);
					
					$rez = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
					return $rez;
				}*/
				
				return $rez;
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
				//$rezultat = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
				
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
				//$rezultat = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
				
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
				//$rezultat = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC);
				
				$index = 0;
				while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {
					$index = $index + 1;
					echo '<tr> <td> '.$index.' </td> '.$row[0].'</tr>';
				}

				oci_free_statement($result);
				oci_close($connection);
			}
	}
	
	
	function redirect($url, $statusCode = 303)
	{
	   header('Location: ' . $url, true, $statusCode);
	   die();
	}
?>