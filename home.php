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
			<div class="row">
				<div class="col-12 t-center">
					<img src="images/cuartada.png" alt="">
				</div>
			</div>

			
			<div class="row separador"></div>
			<form action="configuracion.php">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-8 col-md-6 t-center">
						<div class="caja-select t-center">
							<select name="" id="">
								<option value="0">ELIGE TU CUARTADA</option>
								<option value="1">CONGRESO</option>
							</select>
						</div>
					</div>
				</div>
				

				<div class="row separador"></div>
				<div class="row">
					<div class="col-12 t-center">
						<p class="t-white ">¿No encuentras el material perfecto?</p>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-12 col-sm-8 col-md-5 col-lg-4 t-center">
						<button type="submit" class="boton-d b-diabolo t-white">CONFIGURA TU CUARTADA</button>
					</div>
				</div>
			</form>
		</div>



		<?php include 'includes/footer.php'; ?>

	</div>



















<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	$('#toog-button').on('click', function(){
		$('#toog').slideToggle();
	})
</script>



</body>
</html>

