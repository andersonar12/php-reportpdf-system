<?php

    if(isset($_POST['enviar'])){
        require_once('comprobar_login.php');

        if ($aux){
            echo "<h2 class='error_usuario'>Usuario y/o contraceña incorrectos</h2>";
        }
    }

?>

<link rel="stylesheet" href="css_login.css">
<meta charset="UTF-8">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <div class="entrar">LOGIN</div> 
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
    </div>

    <!-- Login Form -->
    <form action="login.php" class="login-form" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" name="enviar" value="Entrar">
      <br>
      <a href="registrar_usuario.php">¿NO tienes Usuario?</a>
    </form>

    <!-- Remind Passowrd -->

  </div>
</div>