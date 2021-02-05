<?php
	require ('registros_total_productos.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Total Productos</title>
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
						<h2><b>Inventario</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="test.php" class="btn btn-success"><i class="icon-level-up"></i> <span>Volver</span></a>
											
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th></th>
                        <th>NOMBRE</th>
					<th>CANTIDAD TOTAL</th>
				    
                    </tr>
                </thead>

<?php 



foreach($registros as $personas):

	//echo $personas->ID_EQUIPO

?>

                <tbody>
                    <tr>

					<td></td>
				    <td><?php echo $personas->NOMBRE ?></td>
				    <td><?php echo $personas->CANTIDAD_TOTAL ?></td>

                    </tr>
                </tbody>
			 
						
<?php 

	endforeach;

?>
		  </table>


        </div>
    </div>
	
</body>
</html>                                		                            