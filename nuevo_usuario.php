<?php

     $aux = false;

     try{

          require("conexion.php");

          $login = $_POST["user_new"];

          $password = $_POST["password_new"]; 

          $repassword = $_POST["repassword_new"];

          if($password == $repassword){

               $sql = "INSERT INTO usuarios (NOMBRE,CLAVE,ROL_ID) VALUES (:login, :password, 2)";

               $resultado = $base->prepare($sql);

               $resultado->execute(array(":login"=>$login, ":password"=>$password));

               header("Location:login.php");
          }

          else{
               $aux = true;
          }

     }
     
     catch(Exception $e){
          die("Error: " . $e->getMessage());
     }

?>