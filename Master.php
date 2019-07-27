<!DOCTYPE html>
<html>
<head>
<?php include 'view/Components/Header.php';?>
<style>
i.material-icons {
    color: #1e88e5;
}
</style>
</head>
<body>

<div class="Container">
    <?php include 'view/Components/Simple_Menu.php'; ?>
</div>	
<div class="Container">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/Recursos/Banner1.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption center-align">
          <h3>UNIVERSIDAD GERARDO BARRIOS</h3>
          <h5 class="light grey-text text-lighten-3">BIENVENIDO A UGB-CENTRAL.</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner8.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h3>Portal para alumnos</h3>
          <h5 class="light grey-text text-lighten-3">Informacion personal y notas.</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner7.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h3>Area de docentes</h3>
          <h5 class="light grey-text text-lighten-3">Informacion personal y notas.</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/Recursos/Banner5.jpg" class="responsive-img"> <!-- random image -->
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
 <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
</body>
<footer>
<?php include 'view/Components/Footer.php';?>
</footer>
</html>
