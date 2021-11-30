
<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];


$sql="SELECT * FROM crudinmobiliaria.publicacion WHERE id_publicacion='$id'";
$query=pg_query($con,$sql);
$row=pg_fetch_array($query);


$sql="SELECT * FROM crudinmobiliaria.publicacion";

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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
					<h1 id="fh5co-logo"><a href="../index.php"><i class="icon-home"></i>Home<span>state</span></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="../index.php">Inicio</a></li>
                            <li><a href="about.php">Nosotros</a></li>
                            <li><a href="agent.php">Empleados</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="contact.php">Contacto</a></li>
							<li><a href="../Login/index.php">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->

        
<div class="container" class="js-fullheight">
  <div class="properties-listing spacer">
    <div class="row" style="margin-top:80px;">
    

      <div class=" ">
        <h2><?php echo $row['nombre']." en ".$row['ciudad']?></h2>
        <div class="row">
          <div class="col-lg-8">
            <div class="property-images">
              <!-- Slider Starts -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
                <!-- Item 1 -->
                  <div class="item active">
                    <img src="http://localhost/henry-proyecto/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 1 -->

                  <!-- Item 2 -->
                  <div class="item">
                    <img src="http://localhost/henry-proyecto/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 2 -->

                  <!-- Item 3 -->
                  <div class="item">
                    <img src="http://localhost/henry-proyecto/image/<?= $row['foto'];?>" class="properties" alt="properties" />
                  </div>
                  <!-- #Item 3 -->

                  <!-- Item 4 
                  <div class="item ">
                    <img src="images/properties/3.jpg" class="properties" alt="properties" />
                  </div>-->
                  <!-- # Item 4 -->
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
              </div>
              <!-- #Slider Ends -->

            </div>

          
            <div>
              
              </div>

            </div>
            <div class="col-lg-4">


              <div class="col-lg-12  col-sm-6">
			  <div class="spacer">
              <p class="price" style="color:green; font-size:30px;">$ <?php echo $row['precio']  ?></p>
              <h5><span class="glyphicon glyphicon-home"></span> Tipo De Inmueble</h5>
              <p > <?php echo $row['tipo_inmueble']  ?></p>
              <h5><span class="glyphicon glyphicon-record"></span> Ciudad De la residencia </h5>
              <p><?php echo $row['ciudad']  ?></p>
              <h5><span class="glyphicon glyphicon-map-marker"></span> Zona De la residencia </h5>
              <p><?php echo $row['zona']  ?></p>


            </div>
                <div class="property-info">
                  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row['direccion']  ?></p>
  
                  <div class="profile" style="font-size:14px;">
                    <span class="glyphicon glyphicon-user" style="font-size:14px;"></span> Detalles Del Propietario
                    <p style="font-size:14px;"><?php echo $row['nombre_propietario'] ?> <br> </p>
                  </div>
                </div>
               
                <div class="listing-detail" style="margin-bottom:100px">
					
                  	</div>

              </div>
			 
               
            </div>
          </div>
        </div>
      </div>
  </div>
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


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>

	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

