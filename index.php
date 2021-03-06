<!DOCTYPE html>
<html lang="es">

<head>
	<?php require("plantillas/head.php") ?>
	<link rel="stylesheet" href="css/inicio.css">
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/Logo-alt.svg" alt="Estilo ñ"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#nosotros">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
					</li>
					<li class="nav-item">
						<a href="#prestaciones" class="nav-link js-scroll-trigger">Prestaciones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="masthead">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">¡Bienvenido!</div>
				<div class="intro-heading text-uppercase">Estudio de diseño web</div>
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#nosotros">Ver más</a>
			</div>
		</div>
	</header>

	<!-- Nosotros -->
	<section class="page-section bg-white" id="nosotros">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-heading text-uppercase">Nosotros</h2>
				</div>
			</div>
			<div class="row mt-3 text-justify">
				<div class="col-12 col-md-10 col-lg-8 mx-auto">
					<p class="text-muted">
						<strong><em>Estilo ñ</em></strong> es un estudio de desarrollo web dispuesto a desafiarse en todo momento y elaborar proyectos que sobresalgan, ofreciendo soluciones personalizadas para las necesidades de todos los clientes.
						<br>
						Creemos que lo más importante para una empresa es la imagen y la seguridad que transmite a sus clientes y es por eso que nosotros nos enfocamos en los detalles para cubrir al máximo todos los aspectos de un sitio web.
					</p>
					<p class="text-muted">
						En <strong><em>Estilo ñ</em></strong> lo estaremos acompañando en todo el proceso de esta nueva etapa, desde el minuto cero aconsejándolo para que la transición hacia su nuevo sitio sea el ideal y libre de cualquier duda.
					</p>
					<p class="text-muted">
						Bienvenido a <strong><em>Estilo ñ</em></strong>, donde el verdadero cambio comienza y los sueños se hacen realidad.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="page-section bg-light" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Servicios</h2>
					<h3 class="section-subheading text-muted">Algunos de los sitios que desarrollamos, no dude en consultarnos por otras necesidades</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/ecommerce/" class="text-body text-decoration-none">
						<div class="servicio">
							<h4 class="servicio-banner">Más vendido</h4>
							<div class="servicio-badge">
								<i class="fab fa-hotjar fa-inverse fa-3x"></i>
							</div>
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-shopping-cart fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">E-Commerce</h4>
							<p class="text-muted">Plataformas de ventas online con múltiples opciones que se acomodan a cualquier necesidad.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="#" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-user-tie fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Presentación</h4>
							<p class="text-muted">Sitios de presentación para empresas e independientes que quieren agrandar su negocio.</p>
							<h4 class="servicio-caption">
								25% OFF
							</h4>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/blog/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-newspaper fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Noticias / Blogs</h4>
							<p class="text-muted">Sitios para noticias o blogs con el mejor y más sencillo editor de texto con un uso simple e intuitivo.</p>
							<h4 class="servicio-caption">
								<s>25% OFF</s>&nbsp; 50% OFF
							</h4>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/turnos/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-calendar-check fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Turnos</h4>
							<p class="text-muted">Sistema de turnos para consultorios, estudios y cualquier empresa que lo requiera.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/gestion/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="far fa-building fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">Gestión</h4>
							<p class="text-muted">Sistema de gestión personalizado para satisfacer las necesidades empresariales que se requieran.</p>
						</div>
					</a>
				</div>
				<div class="col-11 col-md-6 col-lg-4 mx-auto mt-4">
					<a href="/elearning/" class="text-body text-decoration-none">
						<div class="servicio">
							<!-- <span class="fa-stack fa-4x"> -->
								<!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> -->
								<i class="fas fa-book fa-5x"></i>
							<!-- </span> -->
							<h4 class="service-heading">E-Learning</h4>
							<p class="text-muted">Plataformas de cursos online donde se pueden subir videos y textos con opción de suscripciones de pago.</p>
						</div>
					</a>
				</div>
				<!-- <div class="col-md-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-life-ring fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Backups</h4>
					<p class="text-muted">Protección de tu sitio ante cualquier circunstancia con copias de seguridad semanales o diarias.</p>
				</div>
				<div class="col-md-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Soporte técnico</h4>
					<p class="text-muted">Mantenimiento del sitio y resolución de problemas 24/7.</p>
				</div>
				<div class="col-md-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shield-alt fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Protecctión</h4>
				</div> -->
			</div>
		</div>
	</section>

	<!-- Prestaciones -->
	<section class="page-section bg-white" id="prestaciones">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-heading text-uppercase">Prestaciones</h2>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Diseño Responsive</h4>
					<p class="text-muted">Todos los sitios se adaptan a cualquier tamaño y tipo de pantalla. Incluso cuentan con soporte de accesibilidad para personas con discapacidad visual.</p>
				</div>
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Correos corporativos</h4>
					<p class="text-muted">Correos electrónicos personalizados para una mejor imagen corporativa. (tunombre@tuempresa.com)</p>
				</div>
				<div class="col-md-6 col-lg-4 mt-2">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Seguridad</h4>
					<p class="text-muted">Encriptación SSL/HTTPS para que los sitios sean 100% seguros y confiables. Escencial para el manejo de datos sensibles.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Portfolio Grid -->
	<section class="bg-light page-section" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Portfolio</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-item">
						<a class="portfolio-link" target="_blank" href="https://nohuddle.com.ar/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/nohuddle.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>No Huddle</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-item">
						<a class="portfolio-link" target="_blank" href="portfolio/baran/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/baran.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>Grupo Baran</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-item">
						<a class="portfolio-link" target="_blank" href="https://www.ms-brokers.com.ar/">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/msbrokers.png" alt="">
							<div class="portfolio-caption text-body">
								<h4>MS-Brokers</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="page-section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Contacto</h2>
					<h3 class="section-subheading text-white">¡Pídanos su presupuesto sin cargo!</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm" name="sentMessage" novalidate="novalidate">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Por favor ingrese su nombre">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input class="form-control" id="email" type="email" placeholder="Mail *" required="required" data-validation-required-message="Por favor ingrese su mail">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input class="form-control" id="phone" type="tel" placeholder="Teléfono">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Por favor ingrese un mensaje."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-12 text-center">
								<div id="success"></div>
								<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php require("plantillas/footer.php") ?>

	<?php require("plantillas/scripts.php") ?>

	<!-- Contact form JavaScript -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>
</body>

</html>
