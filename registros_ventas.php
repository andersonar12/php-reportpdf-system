<?php

	include("conexion.php");

	$registros = $base->query("SELECT ID_VENTA, NOMBRE_VENDEDOR, NOMBRE_CLIENTE, FECHA_VENTA, NOMBRE, CODIGO_PRODUCTO, MONTO_VENTA FROM ventas JOIN mercancia ON mercancia.ID_MERCANCIA=ventas.NOMBRE_PRODUCTO ORDER BY ID_VENTA LIMIT $empezar,$tamano")->fetchAll(PDO::FETCH_OBJ);

	$user = $base->query("SELECT * FROM mercancia ORDER BY NOMBRE")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST['insertar'])){

		$inser_nom = $_POST['inser_nom'];
		$inser_ser = $_POST['inser_ser'];
		$inser_bie = $_POST['inser_bie'];
		$inser_mar = $_POST['inser_mar'];
		$inser_mod = $_POST['inser_mod'];
		$inser_est = $_POST['inser_est'];
		
		$sql = "INSERT INTO VENTAS (NOMBRE_VENDEDOR, NOMBRE_CLIENTE, FECHA_VENTA, NOMBRE_PRODUCTO, CODIGO_PRODUCTO, MONTO_VENTA) VALUES (:miNom, :miSer, :miBie, :miMar, :miMod, :miEst)"; 

		$resultado = $base->prepare($sql);

		//$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

		//$resultado->execute();
		

		$resultado->execute(array(":miNom"=>$inser_nom,
							":miSer"=>$inser_ser,
							":miBie"=>$inser_bie,
							":miMar"=>$inser_mar,
							":miMod"=>$inser_mod,
							":miEst"=>$inser_est
							));

		header("Location:ventas.php");
	}
	
	session_start();

     echo "<h2 class='titulo'> Bienvenido " . $_SESSION["usuario"] . "</h2>";

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>