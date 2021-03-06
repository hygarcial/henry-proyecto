<?php 
    include("../BD/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM crudinmobiliaria.publicacion WHERE id_publicacion='$id'";
$query=pg_query($con,$sql);
$row=pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA INMOBILIARIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="#" />      
        <link rel="stylesheet" href="../form_validation/bootstrap4/css/bootstrap.min.css">  
	    <link rel="stylesheet" href="../form_validation/estilos.css">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <style type="text/css">
        
        @media (min-width: 768px){
        .col-md-3{flex: 0 0 auto;width:100%;}
        .descrip{line-height:4.8}
        .col-md-8 {flex: 0 0 auto;width: 100%;padding-top: 20px;}
        .row{margin-left:10px;margin-right:10px;}
        .cestado{text-align: left; margin-left: -20px;}}
        .btn.btn-primary.toggle-on{background-color:green;}
        .btn.btn-default.active.toggle-off{background-color:gray;}
        .form-control.estadobut{width: 35%;}
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
        .toggle.ios .toggle-handle { border-radius: 20px; }
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: #F2F3EB;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 3px #474544;
  max-width: 80%;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 37.5px;
  margin: 50px 0;
}

h1 {
  color: #474544;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}

.icon_wrapper {
  margin: 50px auto 0;
  width: 100%;
}

.icon {
  display: block;
  fill: #474544;
  height: 50px;
  margin: 0 auto;
  width: 50px;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #474544;
	color: #474544;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
  width: 100%;
}

.telephone {
  width: 100%;
}

textarea {
	line-height: 150%;
	height: 150px;
	resize: none;
  width: 100%;
}

::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}

@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  
  #form_button {
    padding: 15px 25px;
  }
}

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .icon {
    height: 35px;
    width: 35px;
  }
  
  .underline {
    width: 53px;
  }
  
  input[type='text'], [type='email'], select, textarea {
    font-size: 0.875em;
  }
}

        
        
        </style>
    </head>
    <body>

        <div class="row">
        <div id="container">
  <h1>&bull; Formulario de inmueble &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    
  </div>
  <form id="form1" class="needs-validation" novalidate action="update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row"> 
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>codigo del inmueble</label>
                                        <input type="text" name="id_publicacion" class="form-control" placeholder="codigo del Inmueble" value="<?php echo $row['id_publicacion'] ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre de la publicacion</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Descripcion De La Publicacion</label>
                                        <input type="text" class="form-control " name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Nombre del Propietario</label>
                                        <input type="text" class="form-control" name="nombre_propietario" placeholder="nombre propietario" value="<?php echo $row['nombre_propietario']  ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Tipo De Inmueble</label>
                                        <select type="text" class="form-control" name="tipo_inmueble" placeholder="Tipo de inmueble" value="<?php echo $row['tipo_inmueble']  ?>">
                                            <option selected value="0"> Elige un tipo de inmueble </option>
                                            <option>Apartaestudio</option> 
                                            <option>Apartamento</option> 
                                            <option>Camprestre</option>                                  
                                            <option>Casa</option> 
                                            <option>Duplex</option> 
                                            <option>Finca</option> 
                                            <option>Local</option> 
                                            <option>Lote</option> 
                                            <option>Lote Comercial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Ciudad Del Inmueble</label>
                                        <select type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad" value="<?php echo $row['ciudad']  ?>">
                                            <option selected value="0"> Elige una Ciudad </option>
                                            <option>Oca??a</option> 
                                            <option>Bogota</option> 
                                            <option>Medellin</option>                                  
                                            <option>Cali</option> 
                                            <option>Pasto</option> 
                                            <option>Cucuta</option> 
                                            <option>Ibague</option> 
                                            <option>Pamplona</option> 
                                            <option>Cartagena</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Zona Del inmueble</label>
                                        <select type="text" class="form-control" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
                                            <option selected value="0"> Elige una Zona </option>
                                            <option>Juan xxlll</option> 
                                            <option>cristo rey</option> 
                                            <option>centro</option>                                  
                                            <option>santa clara</option> 
                                            <option>marabel</option> 
                                            <option>circunvalar</option> 
                                            <option>simon bolivar</option> 
                                            <option>aguas claras</option> 
                                            <option>landia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Direccion Del inmueble</label>
                                        <input type="text" class="form-control " name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Precio del Inmueble</label>
                                        <input type="text" class="form-control" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Foto Actual</label>
                                        <img height="100%" width="100%" src="http://localhost/henry-proyecto/image/<?= $row['foto'];?>"></th>
                                        
                                    </div>
                                </div>
                                    <div class="form-row">
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Foto Principal Del Inmueble</label>
                                        <input type="file" class="form-control mb-3" name="foto" placeholder="foto" value="<?php echo $row['foto']  ?>">
                                    </div>
                                    <div class="col-md-4 mb-3 mt-3">
                                        <label>Agrege La Segunda Foto Del Inmueble</label>
                                         
                                        <input type="file" class="form-control mb-3" name="" placeholder="foto" >
                                    </div>
                                    
                                </div>
                                </div>
                               
                                
                                <br>
                                <br>
                                <input style="font-size:16px; " type="submit" class="btn btn-primary">
                            </form>
</div>
        <script src="../form_validation/popper/popper.min.js"></script>	 	 	
        <script src="../form_validation/bootstrap4/js/bootstrap.min.js"></script>   	
        <script src="../form_validation/codigo.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>

    
</html>



