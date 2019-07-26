<?php
require_once('controller/Usuario.controller.php');
require_once('controller/User.controller.php');

class User
{
	private $pdo, $iniciar;    
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		}
		public function RegistrarUser($Nombres,$Apellidos,$Email,$Password,$FechaNacimiento,$Domicilio)
		{
			try
			{
				$result = array();
				$stm = $this->pdo->prepare("INSERT INTO usuarios (Nombres, Apellidos, Email, Password, Fecha_Nacimiento,Domicilio) values ('$Nombres','$Apellidos','$Email','$Password','$FechaNacimiento','$Domicilio')");
				$stm->execute();
				//return $stm->fetchAll(PDO::FETCH_OBJ);
		
				#$consulta=new UsuarioController();
				#$consulta->Index();
				echo "<script>
				alert('Registro completado, por favor inicie sesion.');
				window.location= 'Master.php?c=Usuario&a=Login'
				</script>";
			
	
			}
			catch(Exception $e)
			{
				die($e->getMessage());
				echo "<script>
				alert('Error al registrarse.');
				window.location= 'Master.php?c=Usuario&a=Index'
				</script>";
			}
		}
	
		public function RegistrarEmpresa($Nombre,$Rubro,$Email,$Password,$Descripcion)
    {
        try
		{
			$result = array();
			$stm = $this->pdo->prepare("INSERT INTO empresas (Nombre, Rubro, Email, Password, Descripcion) values ('$Nombre','$Rubro','$Email','$Password','$Descripcion')");
			$stm->execute();
			//return $stm->fetchAll(PDO::FETCH_OBJ);
	
			#$consulta=new UsuarioController();
			#$consulta->Index();
			echo "<script>
			alert('Registro completado, por favor inicie sesion.');
			window.location= 'Master.php?c=Usuario&a=Login'
			</script>";
		

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ViewProfileAPI()
    {
        try
		{
			$result = array();
			
			$Id_Usuario = $_REQUEST['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT ficha.Domicilio, ficha.Profesion, ficha.Estudios, ficha.Descripcion, ficha.FotoRuta, usuarios.Nombres, usuarios.Apellidos, curriculum.Ruta FROM ficha INNER JOIN usuarios on (ficha.Id_Usuario=usuarios.Id_Usuario) INNER JOIN curriculum on (ficha.Id_Usuario=curriculum.Id_Usuario) WHERE ficha.Id_Usuario='$Id_Usuario' ORDER BY Id_Ficha DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

	}


    public function ProfileFicha()
    {
        try
		{
			$result = array();
			
			$Id=$_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT ficha.Domicilio, ficha.Profesion, ficha.Estudios, ficha.Descripcion, ficha.FotoRuta FROM ficha WHERE Id_Usuario='$Id' ORDER BY Id_Ficha DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

		}
		public function ProfileCurriculum()
    {
        try
		{
			$result = array();
			
			$Id=$_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT curriculum.Nombre,curriculum.Descripcion, curriculum.Tipo, curriculum.Ruta FROM curriculum WHERE Id_Usuario='$Id' ORDER BY Id_Curriculum DESC LIMIT 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

    }
}
