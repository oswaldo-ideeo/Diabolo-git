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
			<div class="row separador sp-min"></div>
		</div>
		<div class="container back-sec">
			<div class="row nav-cuartada" >
					<button class="mas-menu show-xs"><span class="fa fa-bars t-diabolo" id="bars-menu"></span></button>
					<div class="col-20">
						<a href="configuracion.php" class="foot-gris">CONFIGURAR</a>
					</div>

					<div class="col-20">
						<a href="articulos.php" class="foot-gris">MIS ARTÍCULOS</a>
					</div>

					<div class="col-20">
						<a href="resumen.php" class="foot-gris">RESUMEN</a>
					</div>

					<div class="col-20">
						<a href="envio.php" class="foot-gris">DATOS DE ENVÍO</a>
					</div>

					<div class="col-20 active-col">
						<a href="pago.php" class="t-diabolo"><b>PAGO</b></a>
					</div>

				
				
			</div>


		
			<div class="row">
				<div class="col-12">
					<p style="border-bottom: 1px solid black;"></p>
				</div>
			</div>
			
			<div class="row separador"></div>
			<div class="row">
				<div class="col-12 t-center">
					<div class="tick">
						<span class="fa fa-check t-diabolo"></span>
						<h2>TU PAGO SE HA REALIZADO CON ÉXITO.</h2>
						<p class="t-diabolo">En breve nos pondremos en contacto contigo para definir detalles de tu experiencia.</p>
					</div>
				</div>
			</div>

			<div class="row separador"></div>
			
			

			<div class="row justify-content-end">
				<div class="col-sm-4 t-right">
					<div class="separador"></div>
					<button type="button" onclick="window.location.href='perfil.php'" class="boton-d b-diabolo t-white">IR A MI PERFIL</button>
					<div class="separador"></div>
				</div>
			</div>
			
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