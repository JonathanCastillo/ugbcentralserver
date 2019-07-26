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
    <?php include '../Components/Menu_Alumno.php'; ?>
    </nav>
    <div class="row" id="Secciones">
    <center>
        <div class="col s12">
      
            
        </div>
    </div>
    </center>

    <div class="row">
        <div class="col s1"></div>
        <div class="col s10">
               

        <?php require ("../../Modulo/ViewAlum.php");
          $Alumno;          
          $Alumno = new Alumno();?>
            <?php foreach($Alumno->Personal($_SESSION['Codigo']) as $r): ?>  
                        
                <div class="col s3">    
                    <div class="card">
                    <input type="hidden" id="" name="">
                        <div class="card-image pulse">
                        <img class="materialboxed" height="400" src="<?php echo SERVERURL;?><?php echo $r->Foto; ?>" >
                        <span class="card-title"><b class="panel grey darken-4"></b></span>
                        </div>
                        <div class="card-content">
         
                        </div>
                        <div class="panel grey darken-4">
                        <div class="card-action">
                        <center>
                        <a href="#"  class="white-text text-darken-2"><H6 class="font-weight-light">UGB CENTRAL</H6></a>
                        </center>
                        </div>
                        </div>
                    </div>
   
     
        </div>

                <div class="col s9">
                        <ul class="collection">
                        <li class="collection-item avatar card-panel grey darken-4 white-text">
                        <center><h1 class="white-text text-darken-2"><?php echo $_SESSION['user']; ?></h1></center>

                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                                <i class="material-icons circle black">school</i>
                                <span class="title">Carrera</span>
                                <p><?php echo $r->Carrera; ?>
                                </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                                <i class="material-icons circle black">domain</i>
                                <span class="title">Cede</span>
                                <p><?php echo $r->Cede; ?>
                                </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                            <i class="material-icons circle black">chrome_reader_mode</i>
                            <span class="title">Codigo</span>
                            <p><?php echo $r->Codigo_Alumno; ?>
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                            <i class="material-icons circle black">room</i>
                            <span class="title">Domicilio</span>
                            <p><?php echo $r->Domicilio; ?>
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                            <i class="material-icons circle black">phone</i>
                            <span class="title">Telefono</span>
                            <p><?php echo $r->Telefono; ?>
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>
                            <li class="collection-item avatar card-panel grey darken-4 white-text">
                            <i class="material-icons circle black">email</i>
                            <span class="title">Email</span>
                            <p><?php echo $r->Email; ?>
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">check_circle</i></a>
                            </li>

   
                        </ul>

                    </div>
                        
                <?php endforeach; ?> 
         
        </div>



    </div>







</div>
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
        $('.materialboxed').materialbox();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="<?php echo SERVERURL;?>js/materialize.min.js"></script>
</body>
<footer>
<?php #include 'view/Components/Footer.php';?>
</footer>
</html>