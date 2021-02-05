<?php
	require ('paginacion.php');
	require ('registros_productos.php');
	include ("lateral/admin.html");
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
<style>
	#añadir{
		position: relative;
		top: 10;
		left: 560;
	}
</style>
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
						<a href="total_productos.php" class="btn btn-success"><i class="icon-eye"></i> <span>Ver Total Productos</span></a>
											
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" id="añadir"><i class="icon-plus-circle"></i> <span>Añadir Nuevo Registro</span></a>
											
					</div>
					
				</div>
				<br>
				<div class="row">
					<div class="col mt-3">
						<a href="reportes_pdf/funciones/reportes_inventario.php" target="_blank" class="btn btn-success"><i class="icon-eye" ></i> <span>Imprimir PDF</span></a>				
					</div>
				</div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th>ID_PRODUCTOS</th>
                        <th>NOMBRE</th>
					<th>CANTIDAD</th>
				    <th>CODIGO</th>
				    <th>FECHA</th>
				    <th>PROVEEDOR</th>
				    <th>OPCIONES</th>
				    
                    </tr>
                </thead>

<?php 



foreach($registros as $personas):

	//echo $personas->ID_EQUIPO

?>

                <tbody>
                    <tr>
						 
				    <td><?php echo $personas->ID_PRODUCTOS ?></td>
				    <td><?php echo $personas->NOMBRE ?></td>
				    <td><?php echo $personas->CANTIDAD ?></td>
				    <td><?php echo $personas->CODIGO ?></td>
				    <td><?php echo $personas->FECHA ?></td>
				    <td><?php echo $personas->PROVEEDOR ?></td>

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
                        <td>
                            <a href="actualizar_productos.php?id=<?php echo $personas->ID_PRODUCTOS ?> & nom=<?php echo $personas->NOMBRE ?> & ser=<?php echo $personas->CANTIDAD ?> & bie=<?php echo $personas->CODIGO ?> & mar=<?php echo $personas->FECHA ?> & mod=<?php echo $personas->PROVEEDOR ?>" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Editar"></i></a>
					
                            <a data-target="#deleteEmployeeModal<?php echo $personas->ID_PRODUCTOS ?>" class="delete" id="delete" data-toggle="modal"><i class="icon-trash-o" data-toggle="tooltip" title="Borrar"></i></a>
					   
                        </td>
                    </tr>
                </tbody>
			 <!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal<?php echo $personas->ID_PRODUCTOS ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form >
					<div class="modal-header">						
						<h4 class="modal-title">¿Borrar Registro?</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>¿Seguro que quieres eliminar este registro?</p>
						<p class="text-warning"><small>
							Esta acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<a href="borrar_productos.php?iD=<?php echo $personas->ID_PRODUCTOS ?>">
						<span class="btn btn-danger">Borrar</span>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
						
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
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Añadir nuevo Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<select class="form-control" name="inser_nom" id="inser_nom" require>
								<option value="">--Seleccione--</option>
								<?php
									foreach($merca as $usuarios):
								?>

								<option value="<?php echo $usuarios->ID_MERCANCIA ?>"><?php echo $usuarios->NOMBRE ?></option>

								<?php
									endforeach;
								?>
							</select>
						</div>
						<div class="form-group ">
							<label>CANTIDAD</label>
							<input type="number" class="form-control" name="inser_ser" require>
						</div>
						<div class="form-group">
							<label>CODIGO</label>
							<input type="text" class="form-control" name="inser_bie">
						</div>
						<div class="form-group">
							<label>FECHA</label>
							<input type="date" class="form-control" name="inser_mar" required>
						</div>
						<div class="form-group">
							<label>PROVEEDOR</label>
							<select class="form-control" name="inser_mod" id="inser_mod" require>
								<option value="">--Seleccione--</option>
								<?php
									foreach($user as $usuarios):
								?>

								<option value="<?php echo $usuarios->ID_PROVEEDORA ?>"><?php echo $usuarios->NOMBRE ?></option>

								<?php
									endforeach;
								?>
							</select>
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="insertar" value="Añadir">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php //echo "<h1> hola " . json_encode($arrayNombre) ?>
	
</body>
</html>                                		                            