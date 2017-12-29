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
						<a href="" class="foot-gris">CONFIGURAR</a>
					</div>

					<div class="col-20">
						<a href="" class="t-diabolo"><b>MIS ARTÍCULOS</b></a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">RESUMEN</a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">DATOS DE ENVÍO</a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">PAGO</a>
					</div>

				
				
			</div>


			<form action="resumen.php" class="form-config">
				<div class="row">
					<div class="col-12">
						<div class="foot-gris">
							SELECCIONA LOS ARTÍCULOS QUE NECESITAS PARA QUE TU PECADO SEA PERFECTO.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end">
								<div class="col-6 t-right">
									<span class="fa fa-star-o"></span>
									<span class="fa fa-heart-o"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6>Diploma de evento</h6>

									<p>Impresión a fullcolor, personalizado totalmente con los datos del evento seleccionado..</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-diploma.png" alt="">
								</div>
							</div>

							<div class="row">
								.col
							</div>
						</div>
					</div>


					<div class="col-md-6">

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




</body>
</html>