<!DOCTYPE html>
<html>
<head>
<?php include 'view/Components/Header.php';?>
</head>
<body>
<div class="Container">
	  <nav class="panel  grey darken-4">
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
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Ficha personal.</h1>
      <div name="MostrarImagen">
      <img id="Foto" width="200px" height="300" class="materialboxed"/>
        
        </div>
			<form method="POST" action="?c=Curriculum&a=UpFicha" enctype="multipart/form-data">
        
      <div class="input-field">
      <label for="Nombre">Foto de perfil</label>
      <input name="files" id="files" type="file" size="150" maxlength="150">  
      </div>


      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
      <label for="Nombre">Nombre completo</label>
      </div>
      

      <div class="input-field">
      <i class="material-icons prefix">add_location</i>
      <input type="text" name="Domicilio" id="Domicilio" required="Por favor rellene este campo">
      <label for="Domicilio">Domicilio</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">work</i>
      <input type="text" name="Profesion" id="Profesion" required="Por favor rellene este campo">
      <label for="Domicilio">Profesion u oficio</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">school</i>
      <input type="text" name="Estudios" id="Estudios" required="Por favor rellene este campo">
      <label for="Estudios">Estudios realizados en</label>
      </div>
      <div class="input-field">
      

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">speaker_notes</i>
        
          <textarea id="Descripcion" name="Descripcion" class="materialize-textarea"></textarea>
          <label for="textarea1">Descipcion general</label>
        </div>
      </div>
  
      </div>
      <input name="Aceptar" type="submit" value="SUBIR ARCHIVO">
        	<input type="submit"  name ="Aceptar" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>
      
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
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
 </body>
<footer>
<?php include 'view/Components/Footer.php';?>
</footer>
</html>
