<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="3Difica">
	<meta name="description"  content="" />
	<meta name="keywords"  content="" />
	<meta name="robots" content="index, follow">
	<link rel="alternate" hreflang="en-us" href="" />
	<title>3Pharma | Unete a 3Pharma</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
	<?php
		include 'header2.php';
	?>
	<section id="pagina">
		<div class="container-fluid d-flex justify-content-center pt-5 pb-5">
			<div class="col-lg-12 contenedor1024">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="form-group text-center">
							<h1>Unete a nuestra fuerza comercial</h1>
							<p>Deja tus datos de contacto y te haremos llegar informacion sobre comisiones de venta y formas de distribucion.</p>
						</div>
						<div class="form-group">
						    <label>Nombre</label>
						    <input type="text" class="form-control inp_unete" id="nombre">
						</div>
						<div class="form-group">
						    <label>Telefono</label>
						    <input type="text" class="form-control inp_unete" id="telefono" maxlength="10">
						</div>
						<div class="form-group">
						    <label>Email</label>
						    <input type="email" class="form-control inp_unete" id="email">
						</div>
						<div class="form-group pb-4">
							<label>Comentario</label>
							<textarea class="form-control inp_unete" id="mensaje" rows="5"></textarea>
						</div>
						<div class="form-group d-flex justify-content-center">
							<button class="btn btn-t btn_send w-75">ENVIAR</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		include 'footer.php';
	?>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/modernizr-custom.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>
</html>