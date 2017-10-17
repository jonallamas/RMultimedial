<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Téc. en Realización Multimedial</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="stylesheet" href="asset/fontawesome/css/font-awesome.min.css">
</head>
<body>

	<section id="inicio">
		<div class="sep_inicio_iz"></div><div class="sep_inicio_de"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="carrera">
						<div class="sub">Tecnicatura en</div>
						<div class="titulo">Realización<br><span>Multimedial</span></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<p class="info_carrera text-center">Es un profesional especializado en el área multimedia en los distintos medios de la hipercomunicación y la hipermedia- con conocimientos de los procesos técnicos y de los recursos expresivos. Por otra parte es un profesional polivalente capacitado para poner en escena un proyecto, un plan de trabajo y un presupuesto previo, con equipos interdiciplinarios</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 logos">
					<!-- <img src="img/ulp.png" class="center-block" alt=""> -->
					<!-- <img src="img/icad.png" class="center-block" alt=""> -->
					<img src="img/logos.png" class="center-block" alt="">
					<div class='icon-scroll'><div/>
				</div>
			</div>
		</div>
	</section>

	<section id="video3d">
		<div class="container" id="container">
			<div class="row" id="scene">
				<div class="col-sm-6">
					<img src="img/huevo.png" class="huevo img-responsive layer text-center" alt="" data-depth="0.35">
					<div class="circulo_huevo layer" data-depth="0.15"></div>
					<div class="programa">
						<span>Con la tecnología de</span>
						<img src="img/logo_blender.png" width="100px;" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="texto_video3d">
						<span class="layer" data-depth="0.10">Descubre el mundo del</span>
						<span class="layer" data-depth="0.20">modelado</span>
						<span class="layer" data-depth="0.30">y</span>
						<span class="layer" data-depth="0.15">animación</span>
						<span class="layer" data-depth="0.35">3D</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="videos">
		<div class="separacion_video_sup"></div>
		<div class="textura">
			<div class="oscurecer"></div>
		</div>
		<video id="video_primero" playsinline autoplay muted loop>
			<source src="asset/video/video_primero.mp4" type="video/mp4">
		</video>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 explicacion_muestra">
					<div class="titulo">
						<div class="titulosup">Aprender la magia</div>
						<div class="tituloinf">de la <span class="amarillo">edición</span></div>
					</div>
					<p class="texto_explicacion">Domina el paquete <span class="amarillo">Adobe</span> con programas como After Effects, Premier, Audition, entre otros.</p>
				</div>
				<div class="col-sm-4 col-sm-offset-2 explicacion_corto">
					<h3>Primer°<span class="fondo_h3"></span></h3>
					<ul clas="list-unstyled">
						<li>
							<div class="cargo">Director</div>
							<div class="persona_cargo">Jonathan Llamas</div>
						</li>
						<li>
							<div class="cargo">Cámara</div>
							<div class="persona_cargo">
								<ul class="list-unstyled list-inline">
									<li>Tania Lagos</li>
									<li>Hector Oyola</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="cargo">Actor</div>
							<div class="persona_cargo">Gastón Acuña</div>
						</li>
					</ul>
					<a href="#" class="btn btn-default launch-modal" data-modal-id="modal-video">
                        Ver corto
                    </a>
				</div>
			</div>
		</div>
		<div class="lista_videos">
			<div class="cont_lista">
				<div class="video_item" style="background-image: url('asset/video/video_primero.jpg');"></div>
				<div class="video_item" style="background-image: url('asset/video/video_segundo.jpg');"></div>
			</div>
		</div>
		<div class="separacion_video_inf"></div>

		<div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-video">
                            <!-- <video width="800px" height="" controls><source class="video-abierto" src="asset/video/_video-primero.mp4" type="video/mp4"></video> -->
                            <iframe width="800" height="450" src="https://www.youtube.com/embed/g21xOSkh3Wo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section id="programacion">
		
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="" alt="">
					<div class="rotacion">
						<h3 class="subtitulo">Está a la vanguardia en</h3>
						<h2 class="titulo diseno-web">Diseño web</h2>
					</div>
					<h3 class="subtitulo">Aprendiendo sobre</h3>
					<ul>
						<li><span class="pintura"></span>Web responsive</li>
						<li><span class="pintura"></span>Usabilidad y funcionalidad</li>
						<li><span class="pintura"></span>Diseños estáticos y dinámicos</li>
					</ul>
				</div>

				<div class="col-sm-6 mockup">
					<div class="cd-product-mockup" id="float">
						<img src="img/bebes.jpg"  class="img-responsive" alt="">
						<div class="cd-3d-right-side"></div>
						<div class="cd-3d-bottom-side"></div>
					</div>
					<div class="sombra" id="sombra"></div>
				</div>
			</div>
		</div>

		<div class="container contenedor-dos">
			<div class="row">
				<div class="col-sm-6">
					<div class="cd-product-mockup" id="float-dos">
						<img src="img/imagen.jpg"  class="img-responsive" alt="">
						<div class="cd-3d-right-side"></div>
						<div class="cd-3d-bottom-side"></div>
					</div>
					<div class="sombra" id="sombra"></div>
				</div>
				<div class="col-sm-6 text-right">
					<img src="" alt="">
					<div class="rotacion">
						<h3 class="subtitulo">Utiliza frameworks de </h3>
						<h2 class="titulo programacion">Programación</h2>
					</div>
					<ul>
						<li><span class="pintura"></span>Jquery</li>
						<li><span class="pintura"></span>Bootstrap</li>
						<li><span class="pintura"></span>Codeigniter</li>
						<li><span class="pintura"></span>Framework 7</li>
						<li><span class="pintura"></span>Y muchos más</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

		<section id="viruska">
		<div class="separacion_viruska_sup"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="explicacion_sec">
						
						<div class="titulosup">Crea la identidad corporativa</div>
						<div class="tituloinf">de tu propia empresa</div>
						<span class="fondo_exp"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/viruska.png" class="img-responsive" alt="">
				</div>
				<div class="col-sm-8">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class=""></li>
							<li data-target="#carousel-id" data-slide-to="3" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="img-item" style="background-image: url('img/viruska/publicidad1.jpg');"></div>
							</div>
							<div class="item">
								<div class="img-item" style="background-image: url('img/viruska/publicidad2.jpg');"></div>
							</div>
							<div class="item">
								<div class="img-item" style="background-image: url('img/viruska/publicidad3.jpg');"></div>
							</div>
							<div class="item">
								<div class="img-item" style="background-image: url('img/viruska/publicidad4.jpg');"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row info_viruska">
				<div class="col-sm-4">
					<h3>¿Qué es Viruska?</h3>
					<p>Viruska es un equipo integrado por unas 500 personas, apasionadas por la cerveza y estando completamente comprometidos trabajando todos los días en seguir creando el mejor producto desde siempre.</p>
				</div>
				<div class="col-sm-4">
					<h3>Objetivos:</h3>
					<p>Tiene como objetivo lograr que la existencia de la marca sea conocida por el 100% del público objetivo y que al menos un 20% haya efectuado una compra a prueba.</p>
				</div>
				<div class="col-sm-4">
					<h3>Competencias</h3>
					<p>La cervecería y maltería Viruska tiene como competencia a: Brahma, que es propietaria de varias marcas de cerveza, tales como: Andes, Norte, Iguana, Palermo, Bieckert y Quilmes.</p>
				</div>
				<div class="tecnologia_viruska">
					<span>Con la tecnología de</span>
					<img src="img/photoshop.svg" width="30px;" alt=""> y
					<img src="img/illustrator.svg" width="30px;" alt="">
				</div>
			</div>
		</div>
		<div class="separacion_viruska_inf"></div>
	</section>

	<section id="galeria">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 cabecera">
					<div class="sub">Trabajos realizados por</div>
					<div class="titulo">Los <span class="resaltado">estudiantes</span></div>
				</div>
			</div>
			
			<div class="row soga-uno">
			<?php 
				for ($muestra=0; $muestra <= 3; $muestra++) { 
					echo '<div class="col-sm-3">';
					echo '	<a href="#modal-'.$muestra.'" data-toggle="modal" class="polaroid">';
					echo '		<div class="muestra" style="background-image: url(img/galeria/foto_'.$muestra.'.jpg)"></div>';
					echo '<div class="nombre_alumno">';
					switch ($muestra) {
						case 0:
							echo 'Gastón Acuña';
							break;
						case 1:
							echo 'Jere';
							break;
						case 2:
							echo 'Jonathan Llamas';
							break;
						case 3:
							echo 'Jere';
							break;
						case 4:
							echo 'Jere';
							break;
						case 5:
							echo 'Jonathan Llamas';
							break;
						case 6:
							echo 'Jere';
							break;
						case 7:
							echo 'Gastón Acuña';
							break;
					}
					echo '</div>';
					echo '	</a>';
					echo '</div>';
				}
			 ?>
			</div>
			<div class="row soga-dos">
			<?php 
				for ($pola=4; $pola <= 7; $pola++) { 
					echo '<div class="col-sm-3">';
					echo '	<a href="#modal-'.$pola.'" data-toggle="modal" class="polaroid">';
					echo '		<div class="muestra" style="background-image: url(img/galeria/foto_'.$pola.'.jpg")"></div>';
					echo '<div class="nombre_alumno">';
					switch ($pola) {
						case 4:
							echo 'Jere';
							break;
						case 5:
							echo 'Jonathan Llamas';
							break;
						case 6:
							echo 'Jere';
							break;
						case 7:
							echo 'Gastón Acuña';
							break;
					}
					echo '</div>';
					echo '	</a>';
					echo '</div>';
				}
			 ?>
			</div>

			<?php 
				for ($modal=0; $modal < 8; $modal++) { 
					echo '<div class="modal fade" id="modal-'.$modal.'">';
					echo '<div class="modal-dialog modal-lg">';
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

		</div>
		<div class="piso"></div>
		<div class="color"></div>
	</section>

	<section id="nosotros">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><span></span>Trabajo realizado por</h1>
				</div>
			</div>
			<div class="row cont-caras">
				<div class="col-sm-6 gaston">
					<div class="cont-img">
						<div class="apodo">Jasty</div>
						<img class="blur" src="img/gaston_bn.png" alt="">
						<img class="color" src="img/gaston_color.png" alt="">
						<img class="alas" src="img/ala.png" alt="">
					</div>
					<div class="cont-info text-right">
						<span class="nombre">Gastón<br>Acuña</span><br>
						<span class="profesion">Estudiante</span>
					</div>
				</div>
				<div class="col-sm-6 joni">
					<div class="cont-img">
						<div class="apodo">Jona</div>
						<img class="blur" src="img/joni_bn.png" alt="">
						<img class="color" src="img/joni_color.png" alt="">
						<img class="parche" src="img/parche.png" alt="">
						<img class="pirata" src="img/pirata.png" alt="">
					</div>
					<div class="cont-info">
						<span class="nombre">Jonathan<br>Llamas</span><br>
						<span class="profesion">Estudiante</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					Desarrollado con <i class="fa fa-heart" aria-hidden="true"></i> y cariño
				</div>
			</div>
		</div>
	</section>

	<!-- Parallax -->
	<script src="asset/js/parallax.js"></script>
	<script>

	// Pretty simple huh?
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

	</script>
	
	<script src="asset/bootstrap/js/jquery.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>

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