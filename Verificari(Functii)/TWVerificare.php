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
	function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>