<?php

	include("conexion.php");

	$registros = $base->query("SELECT * FROM mercancia LIMIT $empezar,$tamano")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST['insertar'])){

		$inser_nom = $_POST['inser_nom'];
		
		$sql = "INSERT INTO mercancia (NOMBRE) VALUES (:miNom)";  

		$resultado = $base->prepare($sql);

		//$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

		//$resultado->execute();
		

		$resultado->execute(array(":miNom"=>$inser_nom));

		header("Location:mercancia.php");
	}
	
	session_start();

     echo "<h2 class='titulo'> Bienvenido " . $_SESSION["usuario"] . "</h2>";

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>