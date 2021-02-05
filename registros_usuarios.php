<?php

	include("conexion.php");

	$registros = $base->query("SELECT * FROM usuarios LIMIT $empezar,$tamano")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST['insertar'])){

		$inser_usu = $_POST['inser_nom'];
		$inser_con = $_POST['inser_ser'];
		$inser_rol = $_POST['inser_est'];
		
		$sql = "INSERT INTO usuarios (NOMBRE, CLAVE, ROL_ID) VALUES (:miUsu, :miCon, :miRol)";  

		$resultado = $base->prepare($sql);

		//$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

		//$resultado->execute();
		

		$resultado->execute(array(":miUsu"=>$inser_usu,
							":miCon"=>$inser_con,
							":miRol"=>$inser_rol
							));

		header("Location:usuarios.php");
	}
	
	session_start();

     echo "<h2 class='titulo'> Bienvenido " . $_SESSION["usuario"] . "</h2>";

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>