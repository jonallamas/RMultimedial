<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Téc en Realización Multimedial</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="stylesheet" href="asset/fontawesome/css/font-awesome.min.css">
</head>
<body>

	<section id="galeria">
		<div class="container">
			<div class="row soga-uno">
			<?php 
				for ($muestra=0; $muestra <= 3; $muestra++) { 
					echo '<div class="col-sm-3">';
					echo '	<a href="#modal-'.$muestra.'" data-toggle="modal" class="polaroid">';
					echo '		<div class="muestra"></div>';
					echo '	</a>';
					echo '</div>';
				}
			 ?>
			</div>
			<div class="row soga-dos">
			<?php 
				for ($pola=5; $pola <= 8; $pola++) { 
					echo '<div class="col-sm-3">';
					echo '	<a href="#modal-'.$pola.'" data-toggle="modal" class="polaroid">';
					echo '		<div class="muestra"></div>';
					echo '	</a>';
					echo '</div>';
				}
			 ?>
			</div>
		</div>
	</section>

	<?php 
		for ($modal=0; $modal < 8; $modal++) { 
			echo '<div class="modal fade" id="modal-'.$modal.'">';
			echo '<div class="modal-dialog">';
			echo '<div class="modal-content">';
			echo '<div class="modal-body">';
			echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			echo '<img src="img/galeria/foto_'.$modal.'.jpg" class="img-responsive">';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		} 
	?>


	<!-- Parallax -->
	<script src="asset/js/parallax.js"></script>
	<script>

	// Pretty simple huh?
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

	</script>
	
	<script src="asset/bootstrap/js/jquery.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="asset/js/main.js"></script>
	<script src="asset/js/jqfloat.js"></script>

	<script>
		var baloon = $('#float');
		var baloonDos = $('#float-dos') 
   		function runIt() {
   		    baloon.animate({top:'+=10'}, 1000);
   		    baloon.animate({top:'-=10'}, 1000, runIt);
   		    baloonDos.animate({top:'-=10'}, 1000);
   		    baloonDos.animate({top:'+=10'}, 1000, runIt);
   		}
		
   		runIt();

   		
	</script>

	<script>
		$('.launch-modal').on('click', function(e){
	    	e.preventDefault();
	    $( '#' + $(this).data('modal-id') ).modal();
		});
	</script>

</body>
</html>