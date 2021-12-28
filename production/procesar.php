<?php
  @session_start();
    if(!isset($_SESSION["k_username"])) {
        header("Location: login.html");
    }

    $uname = isset($_SESSION["k_Nombre"]) ? $_SESSION["k_Nombre"] : 'example@example.com';
    $uid = isset($_SESSION["k_userId"]) ? $_SESSION["k_userId"] : '0'; 

    
    $smessage = (isset($_SESSION['qform']) && isset($_SESSION['qform']['formMsg'])) ? $_SESSION['qform']['formMsg'] : '';

    $scurrentpage = 'mInicio';
    $titlepage = 'Bienvenida';
    
    include('db_connection.php');
//se manda a llamar la funcion que asigna los
//temas

//SELECT id FROM rnd_opciones where seccion=1 ORDER BY RAND() LIMIT 2;

//SELECT id FROM rnd_opciones where seccion=2 ORDER BY RAND() LIMIT 1;
 //Seccion 1
$qry='SELECT id FROM rnd_opciones where seccion=1 ORDER BY RAND() LIMIT 2';
$result = mysql_query($qry) or die("Error en: en la consulta: " . mysql_error());		
	   //se insertan los valores en la tabla correspondiente
	   while ($row = mysql_fetch_array($result)){
	    $temaid = $row['id'];
	    $queryInsert = 'INSERT INTO rnd_opcion_usuarios(id_usuario,id_opcion) VALUES ('.$uid .',' .$temaid .')';
	    $resultInsert = mysql_query($queryInsert) or die("Error en: insertar los temas: " . mysql_error());	
	    }
     

 //Seccion 2
$qry2='SELECT id FROM rnd_opciones where seccion=2 ORDER BY RAND() LIMIT 1';
$result2 = mysql_query($qry2) or die("Error en: en la consulta: " . mysql_error());		
	   //se insertan los valores en la tabla correspondiente
	   while ($row2 = mysql_fetch_array($result2)){
	    $temaid2 = $row2['id'];
	    $queryInsert2 = 'INSERT INTO rnd_opcion_usuarios(id_usuario,id_opcion) VALUES ('.$uid .',' .$temaid2 .')';
	    $resultInsert2 = mysql_query($queryInsert2) or die("Error en: insertar los temas: " . mysql_error());	
	    }
     


	header("Location: index.php");

/*
SELECT t.* FROM rnd_opciones AS t JOIN (SELECT ROUND(RAND() * 
 (SELECT MAX(id_opcion) FROM rnd_opcion_usuarios)) AS id) AS x WHERE t.id >= x.id LIMIT 2;
*/




?>
