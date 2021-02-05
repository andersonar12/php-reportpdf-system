<?php

    if(isset($_POST['enviar'])){
        require_once('nuevo_usuario.php');

        if ($aux){
            echo "<h2 class='error_usuario'>Las contraseñas no coinciden</h2>";
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
      <div class="entrar">Registro</div> 
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
    </div>

    <!-- Login Form -->
    <form action="registrar_usuario.php" class="login-form" method="POST">
      <input type="text" id="login" class="fadeIn second" name="user_new" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="password_new" placeholder="Contraseña">
      <input type="password" id="password" class="fadeIn third" name="repassword_new" placeholder="Repetir Contraseña">
      <input type="submit" class="fadeIn fourth" name="enviar" value="Entrar">
    </form>

    <!-- Remind Passowrd -->

  </div>
</div>