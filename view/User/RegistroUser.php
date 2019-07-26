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
			<h1>Registrar usuario</h1>
			<form method="POST" action="?c=User&a=RegistrarUser">
      <div class="input-field">
      <i class="material-icons prefix">wb_auto</i>
      <input type="text" name="Nombres" id="Nombres" required="Por favor rellene este campo">
      <label for="Nombres">Nombres</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">wb_auto</i>
      <input type="text" name="Apellidos" id="Apellidos" required="Por favor rellene este campo">
      <label for="Apellidos">Apellidos</label>
      </div>

 



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
      <div class="input-field">
      <i class="material-icons prefix">event</i>
      <input type="date" name="FechaNacimiento" step="1" min="1980-01-01" max="2005-12-31" value="<?php echo date("Y-m-d");?>">
      <label for="FechaNacimiento"></label>
      </div>

    
      <label for="Domicilio">Domicilio</label>
     

<select class="browser-default" name="Domicilio">
  <option value="" disabled selected>Seleccione un domicilio</option>
  <option value="San Miguel">San Miguel</option>
  <option value="Morazan">Morazan</option>
  <option value="La Union">La Union</option>
  <option value="Usulutan">Usulutan</option>
</select>
<br><br>
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
