<?php

     include("conexion.php");

     $id = $_GET["iD"];

     //echo $id;

     $base->query("DELETE FROM PRODUCTOS WHERE ID_PRODUCTOS='$id'");

     header("Location:test.php");

?>