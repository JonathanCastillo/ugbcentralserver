<!DOCTYPE html>
<html>
<head>
<?php
include 'view/Components/Header.php';
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
    <?php include 'view/Components/Menu_Standar.php'; ?>
  </nav>
  <div class="row">
      <div class="col s12"></div>
      <div class="col s3">
      <ul class="collection">
    
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Help:</span>
      <p>Para completar tu perfil, debes publicar tu curriculum completo. El formato admitido en el portal es PDF, asegurate de cumplir con este requerimiento.</p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>

      </div>
      <div class="col s6"><center>
      <h1 class="grey-text text-darken-2">Publicar curriculum.</h1>
    </center>
    <form action="?c=Curriculum&a=Publicar" method="post" enctype="multipart/form-data">  
    <span>Seleccione archivo:</span> <input name="fichero" type="file" size="150" maxlength="150">  
    <br><br> Titulo: <input name="Titulo" type="text" size="70" maxlength="70"> 
    <br><br> Descripcion: <input name="Descripcion" type="text" size="100" maxlength="250"> 
    <br><br> 
    <input name="Aceptar" id="Aceptar" type="submit" value="SUBIR ARCHIVO" class="btn waves-effect waves-light blue darken-2">
  </div>
  <div class="col s3">Espacio para publicidad</div>
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
<?php include 'view/Components/Footer.php';?>
</footer>
</html>