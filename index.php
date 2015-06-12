<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'inc/head_common.php';?>
	<title>Workshop con Boostrap 3</title>
	<!-- Latest compiled and minified CSS -->
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
 --></head>
<body>
	<?php include 'inc/header.php';?>

	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 main-info">
						<h2>Desarrolla front-end like a boss con boostrap</h2>
						<p>Disfruta aprendiendo con <a href="#">Carolina Hernández</a>y <a href="#">Jorge Pérez</a></p>
						<a href="detail.php" class="btn btn-custom">Me apunto</a>
						<a href="detail.php" class="more-info-link">Más información</a>
					</div>
					<div class="col-xs-3 col-xs-offset-1 date-info">
						<h3 class="highlighted"><strong>W21</strong> 13/14 de Julio</h3>
						<h3 class="highlighted">20 plazas</h3>
						<h3 class="highlighted"> USD $99</h3>
					</div>
				</div>
			</div>
		</article>
		<article id="w2" class="workshop workshop-right">
				<div class="container">
				<div class="row">
					<div class="col-xs-3  date-info">
						<h3 class="highlighted"><strong>W38</strong> 19/20 de Julio</h3>
						<h3 class="highlighted">15 plazas</h3>
						<h3 class="highlighted"> USD $120</h3>
					</div>
					<div class="col-xs-8 col-xs-offset-1 main-info">
						<h2>Desarrolla aplicaciones multiplataforma con NodeJs</h2>
						<p>Disfruta aprendiendo con <a href="#">Carolina Hernández</a>y <a href="#">Jorge Pérez</a></p>
						<a href="detail.php" class="more-info-link">Más información</a>	
						<a href="detail.php" class="btn btn-custom">Me apunto</a>
						
					</div>
					
				</div>
			</div>
			
		</article>
		

	</div>
	
	 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	// Latest compiled and minified JavaScript
	// <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
	<?php include 'inc/footer.php';?>
	<?php include 'inc/footer_common.php';?>
</body>
</html>