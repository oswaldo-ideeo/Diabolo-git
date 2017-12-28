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


			<form action="" class="form-config">
				<div class="row">
					<div class="col-md-6">
						<label for="nombre-cuartada">NOMBRE DE TU CUARTADA</label>
						<input type="text" value="RALLY DE NEGOCIOS INTERNACIONALES - NAYARIT 2017">

						<label for="pecado">¿DE QUÉ TRATA EL SUPUESTO PECADO?</label>
						<input type="text" placeholder="DESCRIBE TU PECADO">

						<label for="inicio">FECHA DE LA CUARTADA</label>
						<input type="text" name="from" id="from">

						<label for="fin">FECHA CIERRE DE LA CUARTADA</label>
						<input type="text" name="to" id="to">

						<label for="indicaciones">INDICACIONES ESPECIALES</label>
						<input type="text" placeholder="INSTRUCCIONES O ACCIONES QUE DEBEMOS DE CONSIDERAR">
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