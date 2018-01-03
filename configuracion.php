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
					<div class="col-20 active-col">
						<a href="configuracion.php" class="t-diabolo"><b>CONFIGURAR</b></a>
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

					<div class="col-20">
						<a href="pago.php" class="foot-gris">PAGO</a>
					</div>

				
				
			</div>


			<form action="articulos.php" class="form-config">
				<div class="row">
					<div class="col-lg-6">
						<label for="nombre-cuartada">NOMBRE DE TU CUARTADA</label>
						<input type="text" value="RALLY DE NEGOCIOS INTERNACIONALES - NAYARIT 2017">

						<label for="pecado">¿DE QUÉ TRATA EL SUPUESTO PECADO?</label>
						<input type="text" placeholder="DESCRIBE TU PECADO">
						
						<div class="date-item">
							<label class="label-date" for="inicio">FECHA DE LA CUARTADA</label>
							<input class="input-date" type="text" name="from" id="from">
						</div>

						<div class="date-item">
							<label class="label-date" for="fin">FECHA CIERRE DE LA CUARTADA</label>
							<input class="input-date" type="text" name="to" id="to">
						</div>
						
						<label for="indicaciones">INDICACIONES ESPECIALES</label>
						<input type="text" placeholder="INSTRUCCIONES O ACCIONES QUE DEBEMOS DE CONSIDERAR">
					</div>


					<div class="col-lg-6">
						<p class="gris40">ARTÍCULOS RECOMENDADOS</p>

						<div class="row">
							<div class="col-lg-4 col-sm-4 col-lg-nop">
								<div class="art-item">
									<img src="images/articulo-llavero.png" alt="llavero promocional">
									<p class="t-white">LLAVERO PROMOCIONAL</p>
									<p class="gris40">X1 PZA</p>
									<button type="button" class="cart b-diabolo"><span class="t-white fa fa-plus"></span><span class="t-white fa fa-shopping-cart"></span></button>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-lg-nop">
								<div class="art-item">
									<img src="images/articulo-gafete.png" alt="gafete del evento">
									<p class="t-white">GAFETE DEL EVENTO</p>
									<p class="gris40">X1 PZA</p>
									<button type="button" class="cart b-diabolo"><span class="t-white fa fa-plus"></span><span class="t-white fa fa-shopping-cart"></span></button>
								</div>
							</div>

							<div class="col-lg-4 col-sm-4 col-lg-nop">
								<div class="art-item">
									<img src="images/articulo-diploma.png" alt="dimploma del evento">
									<p class="t-white">DIPLOMA DEL EVENTO</p>
									<p class="gris40">X1 PZA</p>
									<button type="button" class="cart b-diabolo"><span class="t-white fa fa-plus"></span><span class="t-white fa fa-shopping-cart"></span></button>
								</div>
							</div>

							<div class="col-md-3 col-sm-4">
								<a href="" class="t-white">
									<div class="separador"></div>
									<span class="t-white">Ver más </span><span class="fa fa-arrow-circle-right"></span>
								</a>
							</div>
						</div>

											

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

<script type="text/javascript">
	$('#bars-menu').on('click', function(){
		$('.col-20').slideToggle();
	})
</script>

<script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>



</body>
</html>