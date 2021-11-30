<?php 
session_start(); // iniciar la sesion
require('../BD/conexion.php');
$con=conectar();
if(!empty($_POST['nickname_admin']) && !empty($_POST['contraseña_admin'])){
    $nickname_admin=$_POST['nickname_admin'];
    $contraseña_admin=$_POST['contraseña_admin'];
    $nombre_usuario=$_SESSION['$nickname_admin'];
    
    $query="SELECT nickname_admin,contraseña_admin FROM crudinmobiliaria.administrador WHERE nickname_admin='$nickname_admin' AND contraseña_admin='$contraseña_admin'";
    $resultado=pg_query($con,$query);
    $user = pg_fetch_assoc($resultado);// para traer los datos en un array 
    $mensaje='';

    if ($user) {//para validar si nos trajimos datos de la base de datos 
        if ($nickname_admin == $user['nickname_admin'] && $contraseña_admin == $user['contraseña_admin']) {//comparamos los datos 
            $_SESSION['nickname_admin'] = $nickname_admin; // almacenar el email en la sesio 'email'  
            header("Location: ../Inmueble/index_inmueble.php");
        }
    }else{//en el caso de que no halla traido nada de la base de datos

        $mensaje='Ingrese de nuevo su usuario y contraseña';
        header("Location: index.php");
      
       
      }
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Home State</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>




<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="index.php" method="POST" autocomplete="off">
				<?php if(!empty($mensaje)):?>
                    <p class="error" style="color:red;"><strong> <?= $mensaje ?></strong></p>
                <?php endif; ?>
					<span class="login100-form-title p-b-26">
						Bienvenido a Home State
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100"type="text" name="nickname_admin" id="nickname_admin">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="contraseña_admin" id="contraseña_admin">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" style="background: -webkit-linear-gradient(right, #5cc40d, #2dfb92, #005e2e, #000000);">
								Login
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>