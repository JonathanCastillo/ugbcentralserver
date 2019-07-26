<!DOCTYPE html>
<html>
<head>
<?php include ("../../config/config.php"); ?>
<head>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo SERVERURL;?>assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <!-- Compiled and minified CSS -->
      <!-- Compiled and minified CSS -->
<!--Select works with these files:-->
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<!--The select didn't work for me with these files:-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">

      <!--Import Google Font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>assets/css/GeneralStyle.css">
      <!--Import Google Font-->
      <style>
      html 
      {
            font-family: 'Open Sans Condensed', sans-serif;
      }
      i.material-icons 
      {
            color: #1e88e5;
      }
      i:hover 
      {
            color: #76ff03;
      }

      </style>
	<title></title>
      <link rel="icon" href="images/favicon.ico" type="assets/img/icono.ico">
</head>
<?php 
if(!isset($_SESSION)) 
{ 
   session_start();

}
?>




</head>
<body>
<div class="Container">
	 

<div class="navbar-fixed">
    <nav>
<div class="nav-wrapper grey darken-4">
      <!--<a href="?c=Usuario&a=Inicio" class="brand-logo"><img src="assets/img/JC2.png" class="Logo"></a>-->
      <a href="<?php echo SERVERURL;?>view/Usuario/Inicio.php" class="text-logo"><b>UGB CENTRAL</b></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Inicio.php"><i class="material-icons">touch_app</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Login.php"><i class="material-icons">account_circle</i></a></li>
      </ul>
      </div>
</nav>
</div>


	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Iniciar Sesión</h1>
			<form method="POST" action="../../Modulo/Userlogin.php">
      
      <div class="input-field">
      <i class="material-icons prefix">person_pin</i>
      <input type="text" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Código</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">verified_user</i>
      <input type="Password" name="Password" id="Password" required="Por favor rellene este campo">
      <label for="Password"></label>
      </div>


     
<br><br>

        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>






  
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
    $('dropdown').dropdown();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="<?php echo SERVERURL;?>assets/materialize/js/materialize.min.js"></script>
 </body>
<footer>
<?php include '../../view/Components/Footer.php';?>
</footer>
</html>
