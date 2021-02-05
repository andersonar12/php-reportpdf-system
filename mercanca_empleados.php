<?php
	require ('paginacion_mercancia_empleados.php');
	require ('registros_mercancia.php');
	include ("lateral/standar.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventario</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="js/jQuery.js"></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="js/jqBootstrapValidation.js"></script>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="iconos/styles.css">
<script src="js/test.js"></script>
</head>

<body>
	<br>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Mercancia</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th>ID_MERCANCIA</th>
                        <th>NOMBRE</th>
				    
				    
                    </tr>
                </thead>

<?php 



foreach($registros as $personas):

	//echo $personas->ID_EQUIPO

?>

                <tbody>
                    <tr>
						
				    <td><?php echo $personas->ID_MERCANCIA ?></td>
				    <td><?php echo $personas->NOMBRE ?></td>

				    <!--ESTO ES PARA GUIARME-->
				    
				    <!--<td><?php /*if($personas->USUARIO_ID==1){
								echo "Simón";
							}
							else if ($personas->USUARIO_ID==2){
								echo "Juan";
							}
							else if ($personas->USUARIO_ID==5){
								echo "RolandoP";
							}
							else if ($personas->USUARIO_ID==6){
								echo "ElenaP";
							}
							else if ($personas->USUARIO_ID==7){
								echo "RomerC";
							}
							else if ($personas->USUARIO_ID==8){
								echo "CristianL";
							}
							else if ($personas->USUARIO_ID==9){
								echo "CintiaP";
							}
							else if ($personas->USUARIO_ID==10){
								echo "MisladysU";
							}
							else if ($personas->USUARIO_ID==11){
								echo "RosminaT";
							}
							else if ($personas->USUARIO_ID==12){
								echo "NelsonV";
							}
							else if ($personas->USUARIO_ID==13){
								echo "NelsonR";
							}
							else if ($personas->USUARIO_ID==14){
								echo "CorinaC";
							}
							else if ($personas->USUARIO_ID==15){
								echo "MariaC";
							}
							else if ($personas->USUARIO_ID==16){
								echo "JonathanM";
							}
							else if ($personas->USUARIO_ID==17){
								echo "DarneyR";
							}
							else if ($personas->USUARIO_ID==18){
								echo "RichardM";
							}
							else if ($personas->USUARIO_ID==19){
								echo "RicharB";
							}
							else if ($personas->USUARIO_ID==20){
								echo "DavidG";
							}
							else if ($personas->USUARIO_ID==21){
								echo "NinoskaS";
							}
							else if ($personas->USUARIO_ID==22){
								echo "SuilbidaB";
							}
							else if ($personas->USUARIO_ID==23){
								echo "LisbetC";
							}
							else if ($personas->USUARIO_ID==24){
								echo "RafaelC";
							}
							else if ($personas->USUARIO_ID==25){
								echo "JeseniaC";
							}*/
							?></td>-->
                    </tr>
                </tbody>
			 
						
<?php 

	endforeach;

?>
		  </table>
		  <!--Paginacion-->

<?php
	include('cambiar_pagina.php');
?>
        </div>
    </div>
	
	
</body>
</html>                                		                            