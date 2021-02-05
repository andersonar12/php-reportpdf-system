<?php

     include("conexion.php");

     $id = $_GET["iD"];

     //echo $id;

     $base->query("DELETE FROM VENTAS WHERE ID_VENTA='$id'");

     header("Location:ventas.php");

?>