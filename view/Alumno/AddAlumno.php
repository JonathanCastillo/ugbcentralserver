<?php #include ($_SERVER['DOCUMENT_ROOT']."/ugbcentral/config/config.php"); ?>
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

        
<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Registro de Estudiante.</h1>
      <div name="MostrarImagen">
      <img id="Foto" width="200px" height="300" class="materialboxed"/>
        
        </div>
       
        
	  <form method="POST" action="../../Modulo/RegistrarAlum.php" enctype="multipart/form-data">
        
      <div class="input-field">
      <input name="files" id="files" type="file" size="150" maxlength="150" required="Por favor seleccione una foto">  
      <label for="files">Foto de perfil</label>
      <br>
      </div>


      <div class="input-field">
      <i class="material-icons prefix">chrome_reader_mode</i>
      <input type="text" name="Dui" id="Dui" required="Por favor rellene este campo">
      <label for="Dui">DUI</label>
      </div>
      

      <div class="input-field">
      <i class="material-icons prefix">person_pin</i>
      <input type="text" name="Nombres" id="Nombres" required="Por favor rellene este campo">
      <label for="Nombres">Nombres</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">person_pin</i>
      <input type="text" name="Apellidos" id="Apellidos" required="Por favor rellene este campo">
      <label for="Apellidos">Apellidos</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">place</i>
      <input type="text" name="Domicilio" id="Domicilio" required="Por favor rellene este campo">
      <label for="Domicilio">Domicilio</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">call</i>
      <input type="number" name="Telefono" id="Telefono" required="Por favor rellene este campo">
      <label for="Telefono">Telefono</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="email" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Email</label>
      </div>




    

      <i class="material-icons prefix">school</i>
      <select class="browser-default" name="Carrera" id="Carrera" required>
        <option value="" disabled selected>Seleccione una carrera</option>
        <?php require ("../../Modulo/Courses.php");
          $modelo;          
          $modelo = new ModCarreras();?>
        <?php foreach($modelo->ViewCourses() as $j): ?>  
        <span><option value="<?php echo $j->Abreviatura; ?>"><?php echo $j->Nombre; ?></option>
        <?php endforeach; ?> 
        
      </select>
      <label for="Carrera">Carrera</label>


      

    <br><br>
      <i class="material-icons prefix">star</i>
      <select class="browser-default" name="Cede" id="Cede" required>
        <option value="" disabled selected>Seleccione una cede</option>
        <option value="SM">San Miguel</option>
        <option value="US">Usulutan</option>
      </select>
      <label for="Cede">Cede</label>
      <br><br>
      <!--<input name="Aceptar" type="submit" value="SUBIR ARCHIVO">-->
        	<input type="submit"  name ="Aceptar" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  		
              
			</form>
		</div>
    </div>
    </div>
	</center>
      


</div>


    <script>
    $(document).ready(function(){
    $('.slider').slider();
    $('dropdown').dropdown();
    $('.materialboxed').materialbox();
    //$('select').formSelect();
    $('select').material_select();
    instance.open();
    instance.close();
  instance.destroy();
  });
    /*    
	$(document.ready(function(){
    $('.slider').slider();
		$('select').material_select();
    $('dropdown').dropdown();
		//$('.datepicker').pickadate();
  });*/
  function init() {
  var inputFile = document.getElementById('files');
  inputFile.addEventListener('change', mostrarImagen, false);
}

function mostrarImagen(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('Foto');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

window.addEventListener('load', init, false);
</script>










<script>
	$(document.ready(function)
	{
		$('select').material_select();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="<?php echo SERVERURL;?>js/materialize.min.js"></script>
</body>
<footer>
<?php include '../Components/Footer.php';?>
</footer>
</html>