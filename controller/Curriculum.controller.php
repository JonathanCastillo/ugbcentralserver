<?php
	require_once 'model/Curriculum.php';

	class CurriculumController {
		private $model;
		
		public function __CONSTRUCT(){
			$this->model = new Curriculum();
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
        public function Publicar()
        {

            $Modelo=new Curriculum();
            $Titulo=$_REQUEST['Titulo'];
            $Descripcion=$_REQUEST['Descripcion'];
           
            if (isset($_POST['Aceptar'])) { 
                $Modelo=$this->model->Upload($Titulo,$Descripcion); 
                
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