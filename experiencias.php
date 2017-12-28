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
			<div class="row top-esp">
				<div class="col-md-2">
					<a href="perfil.php" class="text-select">Mis datos</a><br>
					<a class="text-select" href="experiencias.php"><span>experiencias</span></a>
				</div>

				<div class="col-md-10 back-negro">
					<div class="info-perfil row">
						<div class="col-md-4">
							<img src="images/profile.png">
						</div>
						<div class="col-md-5">
							<ul>
								<li><span>diablo666</span></li>
								
								<li>james_turner@hotmail.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 row select-experiencia">
						<div class="col-md-6">
							<p style="color:#fff; font-size: 15px;">Activar el guardado de cuartadas</p>
						</div>
						<div class="col-sm-5">
      						<button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="onoff">
        						<div class="handle"></div>
      						</button>
    					</div>	
					</div>
					
					<div class="row justify-content-center mensaje-experiencias">
						<div class="col-sm-6 t-center">
							<h2 class="t-diabolo">NO ESTÁ ACTIVADA LA OPCIÓN DE GUARDAR CUARTADAS</h2>
						</div>
					</div>

					<div class="listado-experiencias container-fluid">
						


						<div class="col-md-4">
							<p class="tex-color">EXPERIENCIAS ACTUALES &nbsp;&nbsp;&nbsp;<span class="no-space fa  fa-caret-down"></span></p>
						</div>
						<div class="row col-md-12">
							<div class="col-md-4">
								<p><span>SEMINARIO DE MARKETING EN LA RIVERA MAYA</span></p>
								<p>02/05/2017</p>
							</div>
							<div class="col-md-3">
								<p>5 ARTÍCULOS</p>
							</div>
							<div class="col-md-3">
								<p>$2,128.00</p>
							</div>
							<div class="col-md-2">
								<input class="boton" type="submit" value="VER DETALLES">
							</div>
						</div><br>

						<div class="col-md-4">
							<p class="tex-color">EXPERIENCIAS CONCLUIDAS &nbsp;&nbsp;&nbsp;<span class="no-space fa  fa-caret-down"></span></p>
						</div>
						<div class="row col-md-12">
							<div class="col-md-4">
								<p><span>CURSOS FIN DE SEMANA</span></p>
								<p>02/03/2017</p>
							</div>
							<div class="col-md-3">
								<p>3 ARTÍCULOS</p>
							</div>
							<div class="col-md-3">
								<p>$900.00</p>
							</div>
							<div class="col-md-2">
								<input class="boton" type="submit" value="VER DETALLES">
							</div>
						</div><br>

						<div class="row col-md-12">
							<div class="col-md-4">
								<p><span>RALLY EDUCATIVO EMPRESARIAL</span></p>
								<p>02/03/2017</p>
							</div>
							<div class="col-md-3">
								<p>7 ARTÍCULOS</p>
							</div>
							<div class="col-md-3">
								<p>$3,128</p>
							</div>
							<div class="col-md-2">
								<input class="boton" type="submit" value="VER DETALLES">
							</div>
						</div><br>
						
					</div>
				</div>
			</div>
		</div>



		<?php include 'includes/footer.php'; ?>

	</div>



















<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<script>
	var encendido = $('#onoff').attr('autocomplete')


	if (encendido == 'off') {
		$('.listado-experiencias').hide();
		$('.mensaje-experiencias').show();
	} else{
		$('listado-experiencias').show();
		$('.mensaje-experiencias').hide();
	}


	$('#onoff').on('click', function(){
		var apagado = $('#onoff').attr('aria-pressed');
		if (apagado == 'true') {
			$('.listado-experiencias').slideUp();
			$('.mensaje-experiencias').show();
		} else if (apagado == 'false') {
			$('.listado-experiencias').slideDown();
			$('.mensaje-experiencias').hide();
		}
	})



</script>

</body>
</html>

