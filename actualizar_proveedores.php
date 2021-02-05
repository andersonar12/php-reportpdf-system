<?php

     session_start();

     if(!isset($_SESSION["rol"])){
          
          header("location:login.html");
     }

     if (headers_sent()) { echo "<h1>Oh no!</h1>"; }

     include("conexion.php"); 

     if(!isset($_POST['bot_actualizar'])){
          $id = $_GET['id'];
          $nom = $_GET['nom'];
          $ser = $_GET['ser'];
          $bie = $_GET['bie'];
          $mar = $_GET['mar'];
          $mod = $_GET['mod'];
     }
     else{
          $id = $_POST['Id'];
          $nom = $_POST['nombre'];
          $ser = $_POST['serial'];
          $bie = $_POST['bien'];
          $mar = $_POST['marca'];
          $mod = $_POST['modelo'];

          /*if($usu >= 1){

          }
          else{
            $usu = NULL;
          }*/

          $sql = "UPDATE PROVEEDORES SET NOMBRE=:miNom, DESCRIPCION=:miSer, CORREO=:miBie, RIT=:miMar, TELEFONO=:miMod WHERE ID_PROVEEDORA=:miId";

          $resultado = $base->prepare($sql);

          //$base->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

          //$resultado->execute();
          

          $resultado->execute(array(":miId"=>$id,
                                   ":miNom"=>$nom,
                                   ":miSer"=>$ser,
                                   ":miBie"=>$bie,
                                   ":miMar"=>$mar,
                                   ":miMod"=>$mod,
                                   ));

          header("Location:proveedores.php");
     }

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="js/jQuery.js"></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src = "js/jqBootstrapValidation.js" > </script>
<link rel="stylesheet" href="css/index.css">
<style>
	#app{
		color: red;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 14px;
	}
</style>
<script type="text/javascript">
/*$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

	$("#est").click(function(){
		if((this.value=="Disponible") || (this.value=="Dañada")){
			$("#inser_usu").attr("disabled",true);
		}
		else if(this.value=="En uso"){
			$("#inser_usu").attr("disabled",false);
		}
	});

	$("#bien").blur(function(){

		var bien = $(this).val();

		if(isNaN(bien)){

			$(this).focus().val("").attr("type","number");
			$("#caja").append("<p id='app'>El dato ingresado no es un numero<p>");
		}
		else{
			$("#app").remove();
		}
	});

});*/
</script>
</head>

<body>
     <!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div class="modal-header">						
						<h4 class="modal-title centro">Editar Registros</h4>
					</div>
					<div class="modal-body">	
						<div class="form-group">
							<label>ID_PROVEEDORA</label>
							<input type="text" class="form-control" value="<?php echo $id ?>" name="Id" readonly >
						</div>				
						<div class="form-group">
							<label>NOMBRE</label>
							<input type="text" class="form-control" value="<?php echo $nom ?>" name="nombre" required>
						</div>
						<div class="form-group">
							<label>DESCRIPCION</label>
							<input type="text" class="form-control" value="<?php echo $ser ?>" name="serial" required>
						</div>
						<div class="form-group" id="caja">
							<label>CORREO</label>
							<input type="email" class="form-control" value="<?php echo $bie ?>" name="bien" id=bien required>
						</div>
						<div class="form-group">
							<label>RIT</label>
							<input type="text" class="form-control" value="<?php echo $mar ?>" name="marca" required>
						</div>
						<div class="form-group">
							<label>TELEFONO</label>
							<input type="number" class="form-control" value="<?php echo $mod ?>" name="modelo" required>
						</div>
							
					</div>
					<div class="modal-footer">
						<a href="proveedores.php"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar"></a>
						<input type="submit" class="btn btn-info" name="bot_actualizar" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>