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
    <h1 class="grey-text text-darken-2">Detalles de la oferta</h1>
      </div>
    </div>
    </center>


    <?php foreach($this->model->PlazaDetails() as $r): ?>

    <div class="col s12 m6">
      <div class="card">
      
        <div class="card-image">
          <img src="assets/img/Finanzas.jpg" class="Operaciones">
          <span class="card-title"><b class="panel orange darken-3"></b></span>
        </div>
        <div class="card-content">
        <ul class="collection">
    <input type="hidden" name="Id_Oferta" value="<?php echo $r->Requisitos; ?>"/>
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
    
  </ul>

      <div id="resultado" name="resultado"></div>
      
          
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
    

     <div class="col s12 m6">

     <ul class="collection">

     <?php foreach($this->model->DetallesDeAplicaciones($Id_Oferta) as $w): 
        
     ?>
    <li class="collection-item avatar">
      <img class="material-icons circle" src="<?php echo $w->FotoRuta?>"/>
      <span class="title"> <?php echo $w->Nombres." ".$w->Apellidos; ?></span><br>
      <span><a href="<?php echo $w->Ruta?>" target="_blank">Ver curriculum</span>
      <a href="#!" class="secondary-content"><i class="material-icons">person_pin</i></a>
      <form method="POST" action="?c=Plazas&a=ViewProfileAPI">
      <input type="hidden" name="Id_Usuario" value="<?php echo $w->Id_Usuario?>">
      <input type="submit" name="Aceptar" value="VER PERFIL" class="btn waves-effect waves-light green darken-2" href="?c=Plazas&a=ViewProfileAPI">
      </form>
    </li>
    <?php endforeach; ?> 
  </ul>
      </div>
     
     
     
  </div>
        