<?php

     include("conexion.php");

     $id = $_GET["iD"];

     //echo $id;

     $base->query("DELETE FROM USUARIOS WHERE ID_USUARIO='$id'");

     header("Location:usuarios.php");

?>