<?php $page = 'DIABOLO'; ?>
<?php $desc = 'Aqui va la descripccion de la pagina'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

	<div class="container-fluid back-diabolo">
		<div class="container">
			<nav class="nav-home row">
				<div class="col-12 t-center show-xs">
					<img src="images/diabolo-glow.png" alt="">
				</div>				
			</nav>

			<div class="row justify-content-center">
				<div class="col-sm-5 col-5 menu-rows">
					<div class="row">
						<div class="col-6">
							<div class="menu-item t-diabolo">
								<a href="home.php" class="t-diabolo">
									<p class="no-space hide-xs">HOME</p>
									<div class="t-center show-xs">
										<span class="fa fa-home"></span>
									</div>
									
									<!--<p class="no-space fa fa-caret-up"></p>-->
								</a>
								

							</div>
						</div>


						<div class="col-6">
							<div class="menu-item t-diabolo">
								<a href="calendario.php" class="t-diabolo">
									<p class="no-space hide-xs">CALENDARIO</p>
									<div class="t-center show-xs">
										<span class="fa fa-calendar"></span>
									</div>
									
								</a>
							</div>
						</div>


					</div>					
				</div>

				
				<div class="col-sm-2 t-center reset hide-xs">
					<img src="images/diabolo-glow.png" alt="">
				</div>

				<div class="col-sm-5 col-7 t-right menu-rows">
					<div class="menu-item t-diabolo">
						<a href="" class="t-diabolo"><span class="fa fa-shopping-cart carrito"></span></a>
						<a  class="t-diabolo" id="toog-button">
							<span>diablo66</span>
							<span><img src="images/profile-icon.png" alt=""></span>
							<span class="fa fa-caret-down"></span>
						</a>
					</div>
					<div class="menu-perfil t-right" id="toog">
						<div class="perfil-item">
							<a href="perfil.php" class="foot-gris">MI PERFIL</a>
						</div>

						<div class="perfil-item">
							<a href="index.php" class="foot-gris">CERRAR SESIÓN</a>
						</div>
					</div>
				</div>
				
				

			</div>
		</div>


		<div class="container">
			<div class="row separador"></div>
			<div class="row">
				<div class="col-12 t-center">
					<img src="images/cuartada.png" alt="">
				</div>
			</div>

			
			<div class="row separador"></div>
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
					<button class="boton-d b-diabolo t-white">CONFIGURA TU CUARTADA</button>
				</div>
			</div>
		</div>



		<div class="container footer">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 t-center">
					<div class="row foot">
						<div class="col-sm-3 t-center foot-gris">DIABOLO.COM&copy;</div>
						<div class="col-sm-3 t-center"><a class="foot-link foot-gris" href="terminos.php">TERMINOS Y CONDICIONES</a></div>
						<div class="col-sm-3 t-center"><a class="foot-link foot-gris" href="privacidad.php">AVISO DE PRIVACIDAD</a></div>
						<div class="col-sm-3 t-center"><a class="foot-link foot-gris" href="privacidad.php">PREGUNTAS FRECUENTES</a></div>
					</div>

					
				</div>
			</div>
		</div>

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

