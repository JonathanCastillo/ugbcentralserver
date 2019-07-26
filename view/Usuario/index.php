<!DOCTYPE html>
<html>
<head>
<?php
include '../Components/Header.php';

if (@!$_SESSION['Usuario']) {
   //header("Location:?c=Usuario&a=Index");
    //Para cuando el perfil sea visitado por alguien mas
    //header("Location:Perfil2.php");
}
?>

</head>
<body>

<div class="Container">
	  <nav class="panel grey darken-4">
    <!--<div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><b><span><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="?c=Curriculum&a=Upload"><i class="material-icons">cloud_upload</i></a></li>
        <li><a href="?c=Curriculum&a=Ficha"><i class="material-icons">description</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>-->
    <?php include '../Components/Menu_Standar.php'; ?>

  </nav>






  <div class="row" id="Secciones">
    <center>
    <div class="col s12">
      
    <h1 class="grey-text text-darken-2">MAIN DASHBOARD</h1>
      </div>
    </div>
    </center>

    <div class="row">
    <div class="col s4">
    <ul class="collection">
    <li class="collection-item avatar card-panel grey darken-4 white-text">
    <i class="material-icons circle blue">account_circle</i>
      <span class="title">Docentes</span>
      <p>Descripcion: Listar docentes.</p>
      <a href="?c=Docente&a=ListarDocentes" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle orange">check_circle</i>
      <span class="title">Docentes</span>
      <p>Descripcion: Registrar docente.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Docentes</span>
      <p>Descripción: </p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle red">portrait</i>
      <span class="title">Descripcion</span>
      <p>Descripción: </p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">description</i>
      <span class="title">Curriculum disponible</span>
      
      
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
  </ul>
</div>





<div class="row">
    <div class="col s4">
    <ul class="collection">
    <li class="collection-item avatar card-panel grey darken-4 white-text">
    <i class="material-icons circle blue">account_circle</i>
      <span class="title">Estudiantes</span>
      <p>Descripción: Listar estudiantes.</p>
      <a href="<?php echo SERVERURL;?>view/Alumno/ViewAlumno.php" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle orange">check_circle</i>
      <span class="title">Estudiantes</span>
      <p>Descripción: Registrar estudiante.</p>
      <a href="<?php echo SERVERURL;?>view/Alumno/AddAlumno.php" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Estudiantes</span>
      <p></p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle red">portrait</i>
      <span class="title">Descripción</span>
      <p>Descripción: </p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">description</i>
      <span class="title">Curriculum disponible</span>
      
      
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
  </ul>
</div>


<div class="col s4">
    <ul class="collection">
    <li class="collection-item avatar card-panel grey darken-4 white-text">
    <i class="material-icons circle blue">account_circle</i>
      <span class="title">Materias</span>
      <p>Descripción: Listar materias.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle orange">check_circle</i>
      <span class="title">Materias</span>
      <p>Descripción: Asignar materia.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Materias</span>
      <p>Descripción: Inscribir materia.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar card-panel grey darken-4 white-text">
      <i class="material-icons circle red">portrait</i>
      <span class="title">Materias</span>
      <p>Descripción: Verificar notas.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">fiber_smart_record</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">description</i>
      <span class="title">Curriculum disponible</span>
      
      
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
  </ul>
</div>



</div>







  </div>
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<footer>
<?php #include 'view/Components/Footer.php';?>
</footer>
</html>