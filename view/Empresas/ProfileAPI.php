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
    <?php include 'view/Components/Menu_Enterprise.php'; ?>

  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
	
	</center>





  <div class="row" id="Secciones">
    <center>
    <div class="col s12">
      <div>
   
      </div>
    </div>
    </center>
    <div class="row">

<div class="col s3">
<?php foreach($this->modeluser->ViewProfileAPI() as $r): ?>
    
      <div class="card">
      <input type="hidden" id="Id_Oferta" name="Id_Oferta">
        <div class="card-image">
          <img src="<?php echo $r->FotoRuta; ?>" class="Operaciones">
          <span class="card-title"><b class="panel blue darken-3"></b></span>
        </div>
        <div class="card-content">
          <!--
          <p><b>SALARIO: </b><?php echo $r->Domicilio; ?></p>
          <p><b>REQUISITOS: </b><?php echo $r->Profesion; ?></p>
          <p><b>CONTACTO: </b><?php echo $r->Estudios; ?></p>
          <p><b>CONTACTO: </b><?php echo $r->Descripcion; ?></p>-->
        </div>
        <div class="panel blue darken-3">
        <div class="card-action">
          <center>
          <a href=""  class="white-text text-darken-2"><H6 class="font-weight-light">Nombre: <?php echo $r->Nombres." ".$r->Apellidos;?></H6></a>
          </center>
          </div>
        </div>
      </div>
   
     
</div>

<div class="col s9">
<ul class="collection">
    <li class="collection-item avatar">
    <i class="material-icons circle blue">location_on</i>
      <span class="title">Domicilio</span>
      <p><?php echo $r->Domicilio; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle orange">check_circle</i>
      <span class="title">Profesión</span>
      <p><?php echo $r->Profesion; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">school</i>
      <span class="title">Estudios</span>
      <p><?php echo $r->Estudios; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">portrait</i>
      <span class="title">Descripcion</span>
      <p><?php echo $r->Descripcion; ?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">description</i>
      <span class="title">Curriculum disponible</span>
      <br>
      <a href="<?php echo $r->Ruta; ?>" target="_blanck">Ver curriculum completo.</a><br>
   
      
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">hdr_strong</i></a>
    </li>
  </ul>

</div>
<?php endforeach; ?> 
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