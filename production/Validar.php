<?php
	session_start();
	session_regenerate_id(true); 
	
	include('db_connection.php');
	
	function quitar($mensaje)
	{
		$nopermitidos = array("'",'\\','<','>',"\"");
		$mensaje = str_replace($nopermitidos, "", $mensaje);
		return $mensaje;
	}
	
  function sanitize($mensaje)
	{
		$nopermitidos = array("'",'\\','<','>',"\"");
		$mensaje = str_replace($nopermitidos, "", $mensaje);
		if(strlen($mensaje) == 0)
			return null;
		else
			return $mensaje;
	}
	
	 

  if(trim($_POST["email"]) )
	{
		$usuario = sanitize(strtolower(htmlentities($_POST["email"], ENT_QUOTES)));
		 
		
		$qry='SELECT  id,nombres,admin,email
  		   FROM rnd_user 
  		   WHERE email=\''.$usuario.'\' ';
		
		$result = mysql_query($qry) or die("Error en: en la validacion: " . mysql_error());		
		 
  		 			    
		if($row = mysql_fetch_array($result))
		{
				if ($row['email'] == $usuario) {
					//se alimentan los datos del usuario en la sesion
					$_SESSION["k_username"]    = $row['email'];
					$_SESSION["k_userId"]      = $row['id'];
					$_SESSION["k_Nombre"]      = $row['nombres'];
					$_SESSION["k_admin"]       = $row['admin']; 
					
					// Login exitoso
					$sessionVal   = session_id();
					$userId       = $row['id'];
				 	$name         = $row['nombres'];
					 
		
					/*$insertSessionQuery = "insert into sesiones (sessionVal,usernameId) values ('".$sessionVal."',".$userId.")";	
					mysql_query($insertSessionQuery);
									
					$updateUsuarioQuery = "update usuarios set fecha_ultimo_acceso = sysdate() where id_usuario = ".$userId;	
					mysql_query($updateUsuarioQuery);
					
					$smessageError = 'Bienvenid@, ' .$name;
					*/
				  $Validation  ='OK';
			   }
			else
				{
					// 'Usuario no existente en la base de datos';
						$smessageError ='Verifique que su cuenta de correo sea correcta.';
						$Validation  ='FAIL';
				}
	 }
	else
		{
			// 'Usuario no existente en la base de datos';
				$smessageError ='Verifique que su cuenta de correo sea correcta';
				$Validation  ='FAIL';
		}
		//mysql_free_result($result);
	}
	else //if campos vacios principal
	{
			//'Debe especificar un usuario y password';
			$smessageError = 'Debe escribir su correo(Correo Electr&oacute;nico).';
			$Validation  ='FAIL';
	}
	$_SESSION['svalidation']   = $Validation;	
	$_SESSION['loginMsg'] = $smessageError;	
	mysql_close();
 	 
	
	if($Validation == 'OK'){
		header("Location: index.php");
	}else{
		header("Location: login.html");
	}

?>
