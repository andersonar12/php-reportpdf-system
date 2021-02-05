<?php

     require('conexion.php');

     $tamano=6;

     if(isset($_GET["pagina"])){

          if($_GET["pagina"]==1){

               header("location:mercancia.php");
          }
          else{
               $paginas=$_GET["pagina"];
          }
     }
     else{
          $paginas = 1;
     }

     $empezar = ($paginas-1)*$tamano;

     $sql_total = "SELECT * FROM mercancia";

     $resultado = $base->prepare($sql_total);

     $resultado->execute(array());

     $num_filas = $resultado->rowCount();

     $total_paginas = ceil($num_filas/$tamano);

     $resultado->closeCursor();

?>