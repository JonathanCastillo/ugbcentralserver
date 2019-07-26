<?php include ("../../config/config.php"); ?>
<!DOCTYPE html>
<html>
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
      i.material-icons {
    color: #1e88e5;
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


<body>

<div class="Container">
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
<div class="Container">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo SERVERURL;?>assets/img/Recursos/Banner1.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption center-align">
          <h3>UNIVERSIDAD GERARDO BARRIOS</h3>
          <h5 class="light grey-text text-lighten-3">BIENVENIDO A UGB-CENTRAL.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo SERVERURL;?>assets/img/Recursos/Banner8.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h3>Portal para alumnos</h3>
          <h5 class="light grey-text text-lighten-3">Informacion personal y notas.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo SERVERURL;?>assets/img/Recursos/Banner7.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h3>Area de docentes</h3>
          <h5 class="light grey-text text-lighten-3">Informacion personal y notas.</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo SERVERURL;?>assets/img/Recursos/Banner5.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption left-align">
          <h3>Servicios estudiantiles</h3>
          <h5 class="light grey-text text-lighten-3">Professional Services</h5>
        </div>
      </li>
    </ul>
  </div>

  <div class="row">
      <div class="grid-example col s12">
      <span class="flow-text"><center><H2>Bienvenido a la comunidad UGB:</center></H2></span>
      
      </div>
      <div class="grid-example col s12 m6">
      <span class="flow-text" text-align = "justify">Somos la Universidad líder en la gestión del conocimiento por nuestra contribución con el desarrollo científico, económico y social de El Salvador. Enfocada en satisfacer las necesidades de estudiantes, comunidades, profesionales y empresas, mediante la docencia, investigación y proyección social.
      </span>
      </div>
      <div class="grid-example col s12 m6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/OCWSB4VJXV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      </div>

    </div>
    

</div>






  
        

<script>
    $(document).ready(function(){
    $('.slider').slider();
    $('dropdown').dropdown();
  });
    /*    
	$(document.ready(function(){
    $('.slider').slider();
		$('select').material_select();
    $('dropdown').dropdown();
		//$('.datepicker').pickadate();
  });*/
</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="<?php echo SERVERURL;?>assets/materialize/js/materialize.min.js"></script>
</body>
<footer>
<?php include '../Components/Footer.php';?>
</footer>
</html>
