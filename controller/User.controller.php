<?php
	require_once 'model/User.php';
	
	class UserController {
		private $model_profile;
		
		public function __CONSTRUCT(){
            $this->model_profile = new User();
            
        }
        public function Upload()
        {
            session_start();
            require_once 'view/Curriculum/Subir.php';
        }
        public function Add()
        {
            
            require_once 'view/User/Registro.php';
        }
        public function AddUser()
        {
            
            require_once 'view/User/RegistroUser.php';
        }
        public function LogoutUser()
        {
            session_start();
            unset($_SESSION["user"]); 
            unset($_SESSION["Id_Usuario"]);
            session_destroy();
            echo "<script>
                alert('Cerrando sesion.');
                window.location= 'Master.php?c=Usuario&a=index';
                </script>";

        }
        public function Logout()
        {
            session_start();
            unset($_SESSION["user"]); 
            unset($_SESSION["Id_Empresa"]);
            session_destroy();
            echo "<script>
                alert('Cerrando sesion.');
                window.location= 'Master.php?c=Usuario&a=index';
                </script>";

        }
        public function Profile()
        {
            session_start();
            require_once 'view/User/Profile.php';
            
        }
        public function Publicar()
        {

            $Modelo=new Curriculum();
            $Titulo=$_REQUEST['Titulo'];
            $Descripcion=$_REQUEST['Descripcion'];
           
            if (isset($_POST['Aceptar'])) { 
                $Modelo=$this->model->Upload($Titulo,$Descripcion); 

            }       
        }
        public function RegistrarUser()
        {

            
            $Nombres=$_REQUEST['Nombres'];
            $Apellidos=$_REQUEST['Apellidos'];
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];
            $FechaNacimiento=$_REQUEST['FechaNacimiento'];
            $Domicilio=$_REQUEST['Domicilio'];
           
            if (isset($_POST['Aceptar'])) { 
                $this->model_profile->RegistrarUser($Nombres,$Apellidos,$Email,$Password,$FechaNacimiento,$Domicilio); 
            }
        }
        public function RegistrarEmpresa()
        {

            
            $Nombre=$_REQUEST['Nombre'];
            $Rubro=$_REQUEST['Rubro'];
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];

            $Descripcion=$_REQUEST['Descripcion'];
           
            if (isset($_POST['Aceptar'])) { 
                $this->model_profile->RegistrarEmpresa($Nombre,$Rubro,$Email,$Password,$Descripcion); 
            }
        }

	}
?>