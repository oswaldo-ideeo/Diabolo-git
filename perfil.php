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
					<a href="perfil" class="text-select"><span>Mis datos</span></a><br>
					<a class="text-select" href="experiencias.php">experiencias</a>
				</div>

				<div class="col-md-10 back-negro">
					<div class="info-perfil row">
						<div class="col-md-4">
							<img src="images/profile.png">
						</div>
						<div class="col-md-5">
							<ul>
								<li><span>diablo666</span></li>
								<li>James Turner</li>
								<li>james_turner@hotmail.com</li>
							</ul>
						</div>
					</div>
					<form action="" method="post" class="col-md-12 row">
						<div class="col-md-6">
							<div class="datos-perfil">
								<p>SOBRENOMBRE</p>
								<input type="text" name="usuario">
							</div>
						</div>
						<div class="col-md-6">
							<div class="datos-perfil">
								<p>CONTRASEÑA</p>
								<input type="password" name="usuario">
							</div>
						</div>
						<div class="col-md-6">
							<div class="datos-perfil">
								<p>CORREO ELECTRÓNICO</p>
								<input type="email" name="mail">
							</div>
						</div>
						<div class="col-md-6">
							<div class="datos-perfil">
								<p>CONFIRMAR CONTRASEÑA</p>
								<input type="password" name="contraseña2">
							</div>
						</div>
						<div class="boton-form">
							<input class="boton" type="submit" value="Actualizar">
						</div>
					</form>
				</div>

			</div>


		</div>
		<div class="container footer">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 t-center">
					<div class="row foot t-white">
						<div class="col-sm-4 t-center">DIABOLO.COM&copy;</div>
						<div class="col-sm-4 t-center"><a class="foot-link" style="color: rgba(255,255,255,0.6);" href="">TERMINOS Y CONDICIONES</a></div>
						<div class="col-sm-4 t-center"><a class="foot-link" style="color: rgba(255,255,255,0.6);" href="">AVISO DE PRIVACIDAD</a></div>
					</div>

					
				</div>
			</div>
		</div>

	</div>



















<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<script>
	
</script>

</body>
</html>

