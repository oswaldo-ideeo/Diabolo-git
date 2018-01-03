<?php $page = 'DIABOLO'; ?>
<?php $desc = 'Aqui va la descripccion de la pagina'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

	<div class="container-fluid back-diabolo">

		<?php include 'includes/header.php'; ?>
		
		<div class="container">
			<div class="row separador"></div>
		</div>
		<div class="container back-sec">
			<div class="row nav-cuartada" >
					<button class="mas-menu show-xs"><span class="fa fa-bars t-diabolo" id="bars-menu"></span></button>
					<div class="col-20">
						<a href="configuracion.php" class="foot-gris"><b>CONFIGURAR</b></a>
					</div>

					<div class="col-20">
						<a href="articulos.php" class="foot-gris">MIS ARTÍCULOS</a>
					</div>

					<div class="col-20">
						<a href="resumen.php" class="foot-gris">RESUMEN</a>
					</div>

					<div class="col-20 active-col">
						<a href="envio.php" class="t-diabolo"><b>DATOS DE ENVÍO</b></a>
					</div>

					<div class="col-20">
						<a href="pago.php" class="foot-gris">PAGO</a>
					</div> 
			</div>
			<div class="envio container">
				<div class="tit-envio row">
					<div class="col-12">
						<p>INFORMACIÓN DE ENVÍO</p>
					</div>
				</div>

				<form action="pago.php">
				<div class="row formulario-envio">
					<div class="col-md-6 row">
						<div class="col-md-12">
							<p>NOMBRE</p>
							<input type="text" name="" placeholder="Harriet">
						</div>
						<div class="col-md-12">
							<p>APELLIDO</p>
							<input type="text" name="" placeholder="Schmidt">
						</div>
						<div class="col-md-6">
							<p>DIRECCIÓN</p>
							<input type="text" name="" placeholder="Av. Coyoacán">
						</div>
						<div class="col-md-6">
							<p>NÚMERO EXTERIOR</p>
							<input type="text" name="" placeholder="1234">
						</div>
						<div class="col-md-6">
							<p>COLONIA</p>
							<input type="text" name="" placeholder="Coyoacán">
						</div>
						<div class="col-md-6">
							<p>CÓDIGO POSTAL</p>
							<input type="text" name="" placeholder="1234">
						</div>
					</div>	

					<div class="col-md-6 row">
						<div class="col-md-6">
							<p>ESTADO</p>
							<select>
								<option>Seleccionar Estado</option>
      							<option>Aguascalientes</option>
      							<option>Baja California</option>
      							<option>Baja California Sur</option>
     	 						<option>Campeche</option>
							</select>
						</div>
						<div class="col-md-6">
							<p>CIUDAD</p>
							<select>
								<option>Seleccionar Ciudad</option>
							</select>
						</div>
						<div class="col-md-6">
							<p>TELÉFONO</p>
							<input type="number" name="" placeholder="240-704-0123">
						</div>
						<div class="col-md-6">
							<p>TELÉFONO 2</p>
							<input type="text" name="" placeholder="240-704-0123">
						</div>
						<div class="col-md-12"">
							<p>NDICACIONES ESPECIALES</p>
							<input type="text" name="" placeholder="Benjamin Franklin S Method Of Habit Formation">
						</div>
						<div class="col-md-12">	</div>
						<div class="col-md-12">	</div>
						<div class="col-md-12">	</div>
						<div class="col-md-12">	</div>
					</div>
					
				</div>

				<div class="row justify-content-end">
				<div class="col-sm-4 t-right">
					<div class="separador"></div>
					
					<button type="submit" class="boton-d b-diabolo t-white">SIGUIENTE</button>
					<div class="separador"></div>
				</div>
			</div>

			</form>
			</div>

		<?php include 'includes/footer.php'; ?>

	</div>





<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<script type="text/javascript">
	$('#toog-button').on('click', function(){
		$('#toog').slideToggle();
	})
</script>

<script type="text/javascript">
	$('#bars-menu').on('click', function(){
		$('.col-20').slideToggle();
	})
</script>



</body>
</html>