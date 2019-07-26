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
      
            <h1 class="grey-text text-darken-2">ESTUDIANTES</h1>
        </div>
    </div>
    </center>

    <div class="row">
        <div class="col s1"></div>
        <div class="col s10">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>FOTO</th>
                        <th>CODIGO</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>DOMICILIO</th>
                        <th>TELEFONO</th>
                        <th>EMAIL</th>
                        <th>CEDE</th>
                        <th>CARRERA</th>
                    </tr>
                </thead>

                <tbody>
                
                    <?php 
                    require ("../../Modulo/ViewAlum.php");
                    $model;
		
                    
                    $model = new Alumno();
                    foreach($model->ViewEstudiante() as $r): 
                    ?>  
                        <tr>
                       
                            <td><img src="../../<?php echo $r->Foto; ?>" alt="" class="circle" width="100" height="100"></td>
                            <td><?php echo $r->Codigo_Alumno; ?></td>
                            <td><?php echo $r->Nombres; ?></td>
                            <td><?php echo $r->Apellidos; ?></td>
                            <td><?php echo $r->Domicilio; ?></td>
                            <td><?php echo $r->Telefono; ?></td>
                            <td><?php echo $r->Email; ?></td>
                            <td><?php echo $r->Cede; ?></td>
                            <td><?php echo $r->Carrera; ?></td>
                        </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
 
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