<?php
    require_once 'model/plazas.php';
    require_once 'model/User.php';
    require_once 'controller/Usuario.controller.php';
	class PlazasController {
		private $model,$modeluser;
		
		public function __CONSTRUCT(){
            $this->model = new Plazas();
            $this->modeluser = new User();
        }
        public function Upload()
        {
            session_start();
            require_once 'view/Curriculum/Subir.php';
        }
        public function Ficha()
        {
            session_start();
            require_once 'view/Curriculum/Ficha.php';
        }
        public function PDetails()
        {
            require_once 'view/Empresas/ViewDetails.php';
        }
        public function ProfileAPI(){
       
            //session_start();
            require_once 'view/Empresas/ProfileAPI.php';
        }    
        public function ViewProfileAPI()
        {
            $Modelo=new User();
            //$Id_Usuario=$_REQUEST['Id_Usuario'];
            
            if (isset($_REQUEST['Aceptar'])) { 
                $Modelo=$this->modeluser->ViewProfileAPI(); 
                require_once 'view/Empresas/ProfileAPI.php';
            }    
        }
        public function PlazaDetailsProfiles()
        {
            $Modelo=new Plazas();
            $Id_Oferta=$_REQUEST['Id_Oferta'];
            
            if (isset($_REQUEST['Aceptar'])) { 
                $Modelo=$this->model->PlazaDetails($Id_Oferta); 
                require_once 'view/Empresas/ViewDetails.php';
            }    
        }
        public function PlazaDetails()
        {

            $Modelo=new Plazas();
            $Id_Oferta=$_REQUEST['Id_Oferta'];
         
            if (isset($_REQUEST['Aceptar'])) { 
                $Modelo=$this->model->PlazaDetails($Id_Oferta); 
                require_once 'view/Empresas/ViewDetails.php';
            }       
           
        }
        public function VerificarAplicacion()
        {

            $Modelo=new Plazas();
            $Id_Oferta=$_REQUEST['Id_Oferta'];
            session_start();
            $Id_Usuario=$_SESSION['Id_Usuario'];
           
            if (isset($_REQUEST['Aceptar'])) { 
                $Modelo=$this->model->VerificarAplicacion($Id_Usuario,$Id_Oferta); 
            }       
            $consulta=new UsuarioController();
        	$consulta->Inicio();
        }
        public function DesactivarPlaza()
        {

            $Id_Oferta=$_REQUEST['Id_Oferta'];
            if (isset($_REQUEST['Desactivar'])) { 
                $Modelo=$this->model->DesactivarPlaza($Id_Oferta); 
            }       
            else
            {
                echo "<script>
			alert('Error al desactivar plaza, intente de nuevo. CONTROLLER');
			window.location= 'Master.php?c=Usuario&a=StartEnterprise'
			</script>"; 
            }
        }
        public function UpFicha()
        {

            $Modelo= new Curriculum();
            $Nombre=$_REQUEST['Nombre'];
            $Domicilio=$_REQUEST['Domicilio'];
            $Profesion=$_REQUEST['Profesion'];
            $Estudios=$_REQUEST['Estudios'];            
            $Descripcion=$_REQUEST['Descripcion'];
           
            if (isset($_POST['Aceptar'])) { 
                $Modelo=$this->model->UploadFicha($Nombre,$Domicilio,$Profesion,$Estudios,$Descripcion); 

            }       
            else
            {
                echo "error";
            }
        }
	

	}
?>