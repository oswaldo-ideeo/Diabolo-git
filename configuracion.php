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
						<a href="" class="t-diabolo"><b>CONFIGURAR</b></a>
					</div>

					<div class="col-20">
						<a href="" class="foot-gris">MIS ARTÍCULOS</a>
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


			<form action="">
				<div class="row">
					<div class="col-md-6">
						<label for="nombre-cuartada">NOMBRE DE TU CUARTADA</label>
						<input type="text" value="RALLY DE NEGOCIOS INTERNACIONALES - NAYARIT 2017">

						<label for="pecado">¿DE QUÉ TRATA EL SUPUESTO PECADO?</label>
						<input type="text" placeholder="DESCRIBE TU PECADO">

						<label for="inicio">DESCRIBE TU PECADO</label>
						<input type="date">
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