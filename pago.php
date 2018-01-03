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


			<form action="pago-exito.php" class="form-config">
				<div class="row">
					<div class="col-md-6">
						<p class="t-white pago-title">INFORMACIÓN DE CONTACTO</p>

						<label for="nombre">NOMBRE</label>
						<input type="text" value="Harriet">

						<label for="apellido">APELLIDO</label>
						<input type="text" value="Schmit">
						
						<label for="pecado">EMAIL</label>
						<input type="email" value="prosacco_heath@hotmail.com">
						
						
						<label for="indicaciones">TELÉFONO</label>
						<input type="tel" placeholder="NÚMERO A 10 DIGITOS INCLUYENDO LADA">
					</div>


					<div class="col-md-6">
						<p class="t-white pago-title">INFORMACIÓN DE PAGO</p>

						<label for="nombre">NOMBRE DEL TITULAR DE LA TARJETA</label>
						<input type="text" value="Harriet J. Schmidt Jones">

						<label for="nombre">NÚMERO DE LA TARJETA</label>
						<span class="fa fa-cc-visa tarjeta"></span>
						<input type="text" class="card-number" value="1234  -  5678  -  9876  -  5432">

						
						<div class="validacion-item v-primera">
							<label for="fecha-validacion">DATOS DE VALIDACIÓN</label>
							
							<div class="selec-tarjeta">
								<select name="mes" id="mes">
									<option value="0">MES</option>
									<option value="1">ENERO</option>
									<option value="2">FEBRERO</option>
									<option value="3">MARZO</option>
									<option value="4">ABRIL</option>
									<option value="5">MAYO</option>
									<option value="6">JUNIO</option>
									<option value="7">JULIO</option>
									<option value="8">AGOSTO</option>
									<option value="9">SEPTIEMBRE</option>
									<option value="10">OCTUBRE</option>
									<option value="11">NOVIEMBRE</option>
									<option value="12">DICIEMBRE</option>
								</select>
							</div>
							
							<div class="selec-tarjeta">
								<select name="ano" id="ano">
									<option value="0">AÑO</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
								</select>
							</div>

						</div>

						<div class="validacion-item">
							<label for="fecha-validacion">CVV</label>
							<input type="password" value="000">
							<span class="fa fa-question-circle question" data-toggle="tooltip" title="" data-original-title="<img src='images/ccv.png' /><br>Los numeros que aparecen al reverso de tu tarjeta"></span>
						</div>

											

					</div>
				</div>
				
				<div class="row">
					<div class="col-12 t-right t-white">
						Total: <span class="total">$750</span>
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

<script>
  
      $(function () {
  $('[data-toggle="tooltip"]').tooltip({
    animated:'fade',
    placement: 'right',
    html: true
  })
})
    
  </script>

  <script type="text/javascript">
	$('#bars-menu').on('click', function(){
		$('.col-20').slideToggle();
	})
</script>



</body>
</html>