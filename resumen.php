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

					<div class="col-20 active-col">
						<a href="" class="t-diabolo"><b>RESUMEN</b></a>
					</div>

					<div class="col-20">
						<a href="envio.php" class="foot-gris">DATOS DE ENVÍO</a>
					</div>

					<div class="col-20">
						<a href="pago.php" class="foot-gris">PAGO</a>
					</div> 
			</div>
			
			<form action="envio.php">
			<div class="row">
				<div class="col-12">
					<table class="table-responsive-md table t-white">
						<tr class="table-heads">
							<th>PRODUCTO</th>
							<th>DESCRIPCIÓN</th>
							<th>PERZONALIZADO</th>
							<th>CANTIDAD</th>
							<th>MONTO</th>
							<th></th>
						</tr>

						<tr>
							<td><img src="images/diploma.jpg"></td>
							<td><p>DIPLOMA DE EVENTO<br>REF. 2597/399</p></td>
							<td><p>MARCELO DIAZ</p></td>
							<td>
								<span class="control-cantidad" id="menos" onclick="res_count('diploma')">-</span>
								<input value="1" class="cantidad-input" id="diploma" type="text" >
								<span class="control-cantidad" id="mas" onclick="inc_count('diploma')">+</span>
							</td>
							<td><p>$250</p></td>
							<td><a href="#" class="t-white" id="cerrar-diploma">X</a></td>
						</tr>

						<tr>
							<td><img src="images/tarjeta.jpg"></td>
							<td><p>GAFETE DEL EVENTO<br>REF. 2597/399</p></td>
							<td><p>MARCELO</p></td>
							<td>
								<span class="control-cantidad" id="menos" onclick="res_count('gafete')">-</span>
								<input value="1" class="cantidad-input" id="gafete" type="text" >
								<span class="control-cantidad" id="mas" onclick="inc_count('gafete')">+</span>
							</td>
							<td><p>$500</p></td>
							<td><a href="#" class="t-white" id="cerrar-gafete">X</a></td>			
						</tr>
					</table>
				</div>
			</div>






			
			<div class="row justify-content-end">
				<div class="col-sm-4 t-right">
					<div class="separador"></div>
					<span class="t-white" style="margin-right: 1rem;">
						Total: <span class="total">$750</span>
					</span>
					
					<button type="submit" class="boton-d b-diabolo t-white">SIGUIENTE</button>
					<div class="separador"></div>
				</div>
			</div>

		</form>

			
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
function inc_count(id)
{
    res = document.getElementById(id);
    res.value = parseInt(res.value)+1;
}

function res_count(id){
	res = document.getElementById(id);
	if (parseInt(res.value) > 0) {
		res.value = parseInt(res.value)-1;
	}
	
	
}
</script>

</body>
</html>