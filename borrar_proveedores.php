<?php

     include("conexion.php");

     $id = $_GET["iD"];

     //echo $id;

     $base->query("DELETE FROM PROVEEDORES WHERE ID_PROVEEDORA='$id'");

     header("Location:proveedores.php");

?>