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
<main>

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
    <h1 class="grey-text text-darken-2">Mis publicaciones.</h1>
      </div>
    </div>
    </center>


    <?php foreach($this->model_plazas->MisPlazas() as $r): ?>
    <?php 
    $Id=$r->Id_Oferta;
    
    ?>
    <div class="col s12 m6">
      <div class="card">
      
        <div class="card-image">
          <img src="assets/img/Finanzas.jpg" class="Operaciones">
          <span class="card-title"><b class="panel blue darken-3"></b></span>
        </div>
        <div class="card-content">
        <ul class="collection">
    <input type="hidden" name="Id_Oferta" value="<?php echo $r->Id_Oferta; ?>"/>
    <li class="collection-item avatar">
      <i class="material-icons circle red">work</i>
      <span class="title"><b>PUESTO:</b></span>
      <p></b><?php echo $r->Puesto; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">money</i>
      <span class="title"><b>SALARIO:</b></span>
      <p></b>$ <?php echo $r->Salario; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle orange">beenhere</i>
      <span class="title"><b>REQUISITOS:</b></span>
      <p></b><?php echo $r->Requisitos; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">contact_mail</i>
      <span class="title"><b>CONTACTO:</b></span>
      <p></b><?php echo $r->Email; ?></p>
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle blue">notifications_active</i>
      <span class="title"><b>ASPIRANTES:</b></span>
      <?php 
      $Id_Oferta=$r->Id_Oferta;
      foreach($this->model_plazas->Aplicaciones($Id_Oferta) as $p): 
      
      ?>
      <p></b><?php //echo $p->Cuenta; ?></p>
      <?php endforeach; ?> 
      <a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a>
    </li>
  </ul>



<!--
          <p><b>SALARIO: </b><?php echo $r->Salario; ?></p>
          <p><b>REQUISITOS: </b><?php echo $r->Requisitos; ?></p>
          <p><b>CONTACTO: </b><?php echo $r->Email; ?></p>
          <p><b>ID: </b><?php echo $r->Id_Oferta; ?></p>-->

      <div id="resultado" name="resultado"></div>
      <div class="row">
          <div class="col s4">
          <form action="?c=Plazas&a=PlazaDetails" method="POST">
          <input type="hidden" id="Id_Oferta" name="Id_Oferta" value="<?php echo $r->Id_Oferta; ?>">
          <input type="submit" name="Aceptar" value="VER DETALLES" class="btn waves-effect waves-light green darken-2">
          </form>
          </div>
          <div class="col s4">
          <form action="?c=Plazas&a=DesactivarPlaza" method="POST">
          <input type="hidden" id="Id_Oferta" name="Id_Oferta" value="<?php echo $r->Id_Oferta; ?>">
          <input type="submit" name="Desactivar" value="CERRAR OFERTA" class="btn waves-effect waves-light red darken-2">
          </form>
          </div>
          </div>
        </div>
        <div class="panel blue darken-3">
        <div class="card-action">
          <center>
          <a href=""  class="white-text text-darken-2">EMPRESA: <?php echo $r->Nombre; ?></a>
          </center>
          </div>
        </div>
      </div>
    </div>
     <?php endforeach; ?> 
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
</main>

<?php include 'view/Components/Footer.php';?>

</html>