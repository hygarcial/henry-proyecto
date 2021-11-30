
<?php 
    include("BD/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM crudinmobiliaria.publicacion";
    $query=pg_query($con,$sql);

    $row=pg_fetch_array($query);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homestate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="Principal/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="Principal/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="Principal/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="Principal/css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="Principal/css/flexslider.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="Principal/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="Principal/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="Principal/css/cs-select.css">
	<link rel="stylesheet" href="Principal/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="Principal/css/style.css">


	<!-- Modernizr JS -->
	<script src="Principal/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-home"></i>Home<span>state</span></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="Principal/about.php">Nosotros</a></li>
                            <li><a href="Principal/agent.php">Empleados</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="Principal/contact.php">Contacto</a></li>
							<li><a href="Login/index.php">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->

		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(Principal/images/img_bg_1.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Sale</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$4,000.00</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(Principal/images/img_bg_2.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Rent</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$2000/mos</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(Principal/images/img_bg_3.jpg);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<span class="status">Sale</span>
				   						<h1>New House in Canada, UK</h1>
											<h2 class="price">$4,000.00</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="details">
												<span>2000 ft sq</span>
												<span>4 Bedrooms</span>
												<span>3 Bathrooms</span>
												<span>2 Garage</span>
											</p>
											<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>


		<div id="fh5co-properties" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Nuevas Publicaciones</h3>
						<p>Aca podras encontrar las publicaciones de inmuebles mas recientes de Homestate</p>
					</div>
				</div>
				<div class="row">
                    <?php
                    while($row=pg_fetch_array($query)){
                    ?>
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="Principal/detalle-casa.php?id=<?php echo $row['id_publicacion'] ?>" class="fh5co-property" style="background-image: url(http://localhost//henry-proyecto/image/<?= $row['foto'];?>);">
                            
								<span class="status">Sale</span>
								<ul class="list-details">
									<li>Tipo de inmueble: <?php echo $row['tipo_inmueble'] ?><li>
									
								</ul>
							</a>
							<div class="property-details">
								<h3><?php echo $row['nombre'] ?></h3>
								<span class="price">$ <?php echo $row['precio'] ?></span>
								<p><?php echo $row['descripcion'] ?></p>
								<span class="address"><i class="icon-map"></i><?php echo $row['direccion'] ?></span>
							</div>
						</div>
					</div>
                    <?php 
                    }
                    ?>
				</div>
			</div>
		</div>

		<!-- fh5co-blog-section -->
		<div id="fh5co-contact" class="fh5co-contact">
			<div class="half-contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
							<h3>Pregunta a un agente, estamos aquí para ayudarte 24/7</h3>
							<p>Puedes comunicarte con nosotros en cualquier momento solo ingresa tus datos y la inquietud y en cualquier momento nuestros asesores respondera a tus preguntas</p>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                                <div class="row">
                                    <form role="form" action="Principal/contacto/insertar_contacto.php" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="nombre_realizo_contacto" class="form-control" placeholder="Nombre Completo"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="correo_contacto" class="form-control" placeholder="Correo electronico"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="tel" name="telefono_contacto" class="form-control" placeholder="Numero de contacto"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <textarea rows="6" name="descripcion_contacto" class="form-control" placeholder="Pregunta?"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="Submit">Contactame</button>
                                            </div>
                                        </div>
                
                                    </form>
                                </div>
                            </div>
                        </div>
				    </div>
			    </div>
			<div class="half-bg" style="background-image: url(Principal/images/cover_bg_2.jpg);"></div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-3">
							<h3 class="section-title">About Homestate</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						</div>
						
						<div class="col-md-3 col-md-push-1">
							<h3 class="section-title">Links</h3>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Properties</a></li>
								<li><a href="#">Agent</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">API</a></li>
								<li><a href="#">FAQ / Contact</a></li>
							</ul>
						</div>

						<div class="col-md-3">
							<h3 class="section-title">Information</h3>
							<ul>
								<li><a href="#">Terms &amp; Condition</a></li>
								<li><a href="#">License</a></li>
								<li><a href="#">Privacy &amp; Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="section-title">Newsletter</h3>
							<p>Subscribe for our newsletter</p>
							<form class="form-inline" id="fh5co-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="Principal/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="Principal/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="Principal/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="Principal/js/jquery.waypoints.min.js"></script>
	<script src="Principal/js/sticky.js"></script>
	<!-- Superfish -->
	<script src="Principal/js/hoverIntent.js"></script>
	<script src="Principal/js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="Principal/js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="Principal/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="Principal/js/classie.js"></script>
	<script src="Principal/js/selectFx.js"></script>

	
	<!-- Main JS -->
	<script src="Principal/js/main.js"></script>

	</body>
</html>

