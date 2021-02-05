<?php

     include("conexion.php");

     $id = $_GET["iD"];

     //echo $id;

     $base->query("DELETE FROM MERCANCIA WHERE ID_MERCANCIA='$id'");

     header("Location:mercancia.php");

?>