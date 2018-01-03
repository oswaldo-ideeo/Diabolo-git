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
						<a href="configuracion.php" class="foot-gris">CONFIGURAR</a>
					</div>

					<div class="col-20 active-col">
						<a href="articulos.php" class="t-diabolo"><b>MIS ARTÍCULOS</b></a>
					</div>

					<div class="col-20">
						<a href="resumen.php" class="foot-gris">RESUMEN</a>
					</div>

					<div class="col-20">
						<a href="envio.php" class="foot-gris">DATOS DE ENVÍO</a>
					</div>

					<div class="col-20">
						<a href="pago.php" class="foot-gris">PAGO</a>
					</div>

				
				
			</div>


			<form action="resumen.php" class="form-config">
				<div class="row" style="margin-bottom: 1rem;">
					<div class="col-12">
						<div class="foot-gris">
							SELECCIONA LOS ARTÍCULOS QUE NECESITAS PARA QUE TU PECADO SEA PERFECTO.
						</div>
					</div>
				</div>
				<div class="row">

					<!--articculo promocional-->
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Diploma de evento</h6>

									<p class="articulo-desc">Impresión a fullcolor, personalizado totalmente con los datos del evento seleccionado.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-diploma.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$200</button>
								</div>
							</div>
						</div>
					</div>
					
					<!--articculo promocional fin-->

					<!--articculo promocional-->

					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Llavero promocional.</h6>

									<p class="articulo-desc">Llavero metálico con recubrimiento de piel personalizado.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-llavero.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$125</button>
								</div>
							</div>
						</div>
					</div>

					<!--articculo promocional fin-->

					<!--articculo promocional-->
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Gafete del evento.</h6>

									<p class="articulo-desc">Gafete de acreditación y acceso del evento. Impreso a fullcolor. Incluye portagafete.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-gafete.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$175</button>
								</div>
							</div>
						</div>
					</div>
					
					<!--articculo promocional fin-->


					<!--articculo promocional-->
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Brazalete personalizado.</h6>

									<p class="articulo-desc">Brazalete de estadía. Personalizado con el evento que se elija.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-brazalete.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$50</button>
								</div>
							</div>
						</div>
					</div>
					
					<!--articculo promocional fin-->

					<!--articculo promocional-->
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Taza.</h6>

									<p class="articulo-desc">Taza totalmente personalizable. El color se ajusta a la identidad del evento.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-taza.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$225</button>
								</div>
							</div>
						</div>
					</div>
					
					<!--articculo promocional fin-->

					<!--articculo promocional-->
					<div class="col-md-6">
						<div class="articulo-card">
							<div class="row justify-content-end favorito">
								<div class="col-6 t-right">
									<span class="fa fa-star star-in" id="star"></span>
									<span class="fa fa-heart hearth-in" id="hearth"></span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<h6 class="articulo-name">Bolígrafos.</h6>

									<p class="articulo-desc">Bolígrafo premium personalizado.</p>
								</div>

								<div class="col-md-4">
									<img src="images/articulo-pluma.png" alt="" class="articulos">
								</div>
							</div>

							<div class="row">
								<div class="col-12" style="margin-top: 15px;">
									<button type="button" class="t-diabolo carrito-2"><span class="fa fa-shopping-cart"></span>Agregar al carrito</button>
									<button class="precio" disabled="true">$50</button>
								</div>
							</div>
						</div>
					</div>
					
					<!--articculo promocional fin-->
					
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

<script>



	
var fav = $('#star').attr('class');


	$('#star').on('click', function(){
		
		if (fav = 'star-in') {
			$(this).switchClass('star-in', 'star-out', 1000, 'easeOutBounce');
		}; 

		if (fav = 'star-out') {
			$(this).switchClass('star-out', 'star-in', 1000, 'easeOutBounce');
		}

	});






	
</script>


</body>
</html>