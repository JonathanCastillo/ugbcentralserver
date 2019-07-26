<!DOCTYPE html>
<html>
<head>
<?php include 'view/Components/Header.php';?>
</head>
<body>
<div class="Container">
	  <nav class="panel  grey darken-4">
    <div class="nav-wrapper">

      <a href="?c=Usuario&a=Index" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?c=Usuario&a=Sigin"><i class="material-icons">lock_open</i></a></li>
        <li><a href="?c=User&a=Add"><i class="material-icons">business_center</i></a></li>
        <li><a href="?c=User&a=AddUser"><i class="material-icons">person_add</i></a></li>
        
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Registrar empresa</h1>
			<form method="POST" action="?c=User&a=RegistrarEmpresa">
      <div class="input-field">
      <i class="material-icons prefix">wb_auto</i>
      <input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
      <label for="Email">Nombre de la empresa</label>
      </div>

 
  <label>Rubro</label>

  <select class="browser-default" name="Rubro">
    <option value="" disabled selected>Seleccione un rubro</option>
    <option value="Restaurante">Restaurante</option>
    <option value="Hotel">Hotel</option>
    <option value="Textil">Textil</option>
    <option value="Transporte">Transporte</option>
  </select>


      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="text" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Email</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">lock_open</i>
      <input type="Password" name="Password" id="Password" required="Por favor rellene este campo">
      <label for="Password"></label>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">speaker_notes</i>
        
          <textarea id="Descripcion" name="Descripcion" class="materialize-textarea" required></textarea>
          <label for="textarea1">Descipcion de la empresa</label>
        </div>
      </div>

        	<input type="submit" name ="Aceptar" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>






  
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
    $('dropdown').dropdown();
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
