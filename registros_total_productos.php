<?php

	require("conexion.php");

     $registros = $base->query("SELECT mercancia.NOMBRE, SUM(CANTIDAD) AS CANTIDAD_TOTAL FROM productos JOIN mercancia ON mercancia.ID_MERCANCIA=productos.NOMBRE_ID GROUP BY NOMBRE")->fetchAll(PDO::FETCH_OBJ);
     
	
	session_start();

     if(!isset($_SESSION["rol"])){
          
          header("location:login.php");
	}
	
	if (headers_sent()) { echo "<h1>Oh no!</h1>"; }
?>