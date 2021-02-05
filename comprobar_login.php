<?php

     $aux = false;

     try{

          require("conexion.php");

          $login = $_POST["login"];

          $password = $_POST["password"]; 

          $sql = "SELECT * FROM usuarios WHERE nombre= :login AND clave= :password";

          $resultado = $base->prepare($sql);

          $resultado->execute(array(":login"=>$login, ":password"=>$password));

          $numero_registro = $resultado->fetch(PDO::FETCH_ASSOC);

          if($numero_registro){

               session_start();

               $_SESSION["usuario"] = $login;

               $rol = $numero_registro['ROL_ID'];

               $_SESSION["rol"] = $rol;

               switch($_SESSION["rol"]){

                    case 1:
                         header("Location:inicio.php");
                    break;

                    case 2:
                         header("Location:inicio_empleados.php");
                    break;

                    default:
                         echo "Ha ocurrido un error";
               }

               //header("location:usuarios_registrados1.php");
          }
          else{
               $aux = true;
          }
     }
     catch(Exception $e){
          die("Error: " . $e->getMessage());
     }

?>