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
			<div class="row col-md-12 experiencia-menu ">
				<div class="col-md-3">
					<p>PRODUCTO</p>
				</div>
				<div class="col-md-3">
					<p>DESCRIPCIÓN</p>
				</div>
				<div class="col-md-2">
					<p>PERZONALIZADO</p>
				</div>
				<div class="col-md-2">
					<p>CANTIDAD</p>
				</div>
				<div class="col-md-1">
					<p>MONTO</p>
				</div>
			</div><br>


			<div id="diploma" class="row col-md-12 experiencia-cont">
				<div class="col-md-3">
					<img src="images/diploma.jpg">
				</div>
				<div class="col-md-3">
					<p>DIPLOMA DE EVENTO<br>REF. 2597/399</p>
				</div>
				<div class="col-md-2">
					<p>MARCELO DIAZ</p>
				</div>
				<div class="col-md-2">
					<input class="exp-numero" type="number">
				</div>
				<div class="col-md-1">
					<p>$250</p>
				</div>
				<div class="col-md-1">
					<a href="#" id="cerrar-diploma">X</a>
				</div>
			</div>


			<div id="gafete" class="row col-md-12 experiencia-cont" >
				<div class="col-md-3">
					<img src="images/tarjeta.jpg">
				</div>
				<div class="col-md-3">
					<p>GAFETE DEL EVENTO<br>REF. 2597/399</p>
				</div>
				<div class="col-md-2">
					<p>MARCELO</p>
				</div>
				<div class="col-md-2">
					<input class="exp-numero" type="number">
				</div>
				<div class="col-md-1">
					<p>$500</p>
				</div>
				<div class="col-md-1">
					<a href="#" id="cerrar-gafete">X</a>
				</div>
			</div>
			<div  class="col-md-4 row exp-total">
				<div class="col-md-4"><p>Total: $750</p>
				</div>
				<div><input class="boton" type="submit" value="SIGUIENTE"></div>
			</div>

			
		</div>
		<script type="text/javascript">
			$('#cerrar-diploma').on('click', function(e){
				e.preventDefault ();
				TweenLite.to('#diploma', .4, { ease: Expo.easeOut, x:0, opacity: 0, display: 'none'});
			});
			$('#cerrar-gafete').on('click', function(e){
				e.preventDefault ();
				TweenLite.to('#gafete', .4, { ease: Expo.easeOut, x:0, opacity: 0, display: 'none'});
			});
		</script>
		
	


		<?php include 'includes/footer.php'; ?>

	</div>