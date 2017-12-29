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
				
					<div class="col-20">
						<a href="" class="foot-gris"><b>CONFIGURAR</b></a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">MIS ARTÍCULOS</a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">RESUMEN</a>
					</div>

					<div class="col-20">
						<a href="" class="t-diabolo">DATOS DE ENVÍO</a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">PAGO</a>
					</div> 
			</div>
			<div class="envio">
				<div class="tit-envio">
					<p>INFORMACIÓN DE ENVÍO</p>
				</div>
				<form action="" class="col-md-12 row formulario-envio">
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
					<div class="envio-boton">
						<input class="boton" type="submit" value="SIGUIENTE">
					</div>
				</form>
			</div>

		<?php include 'includes/footer.php'; ?>

	</div>