<?php

	include("conexion.php");

	$registros = $base->query("SELECT * FROM proveedores LIMIT $empezar,$tamano")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST['insertar'])){

		$inser_nom = $_POST['inser_nom'];
		$inser_ser = $_POST['inser_ser'];
		$inser_bie = $_POST['inser_bie'];
		$inser_mar = $_POST['inser_mar'];
		$inser_mod = $_POST['inser_mod'];
		
		$sql = "INSERT INTO PROVEEDORES (NOMBRE, DESCRIPCION, CORREO, RIT, TELEFONO) VALUES (:miNom, :miSer, :miBie, :miMar, :miMod)";  

		$resultado = $base->prepare($sql);

		//$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

		//$resultado->execute();
		

		$resultado->execute(array(":miNom"=>$inser_nom,
							":miSer"=>$inser_ser,
							":miBie"=>$inser_bie,
							":miMar"=>$inser_mar,
							":miMod"=>$inser_mod,
							));

		header("Location:proveedores.php");
	}
	
	session_start();

     echo "<h2 class='titulo'> Bienvenido " . $_SESSION["usuario"] . "</h2>";

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>