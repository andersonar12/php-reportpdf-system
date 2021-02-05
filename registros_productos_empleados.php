<?php

	require("conexion.php");

	$registros = $base->query("SELECT ID_PRODUCTOS, mercancia.NOMBRE, CANTIDAD, CODIGO, FECHA, proveedores.NOMBRE AS PROVEEDOR FROM productos JOIN mercancia ON mercancia.ID_MERCANCIA=productos.NOMBRE_ID JOIN proveedores ON proveedores.ID_PROVEEDORA=productos.PROVEEDOR_ID ORDER BY ID_PRODUCTOS LIMIT $empezar,$tamano")->fetchAll(PDO::FETCH_OBJ);

	$user = $base->query("SELECT * FROM PROVEEDORES ORDER BY NOMBRE")->fetchAll(PDO::FETCH_OBJ);

	$merca = $base->query("SELECT * FROM MERCANCIA ORDER BY NOMBRE")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST['insertar'])){

		$inser_nom = $_POST['inser_nom'];
		$inser_ser = $_POST['inser_ser'];
		$inser_bie = $_POST['inser_bie'];
		$inser_mar = $_POST['inser_mar'];
		$inser_mod = $_POST['inser_mod'];
	
		/*if($inser_usu >= 1){

		}
		else{
		  $inser_usu = NULL;
		}*/
		
		$sql = "INSERT INTO PRODUCTOS (NOMBRE_ID, CANTIDAD, CODIGO, FECHA, PROVEEDOR_ID) VALUES (:miNom, :miSer, :miBie, :miMar, :miMod)";  

		$resultado = $base->prepare($sql);

		//$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

		//$resultado->execute();
		

		$resultado->execute(array(":miNom"=>$inser_nom,
							":miSer"=>$inser_ser,
							":miBie"=>$inser_bie,
							":miMar"=>$inser_mar,
							":miMod"=>$inser_mod,
							));

		header("Location:productos_empleados.php");
	}
	
	session_start();

     echo "<h2 class='titulo'> Bienvenido " . $_SESSION["usuario"] . "</h2>";

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>