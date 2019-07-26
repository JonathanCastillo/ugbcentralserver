<?php
	require_once 'model/Docentes.php';

	class DocenteController {
		private $model;
		
		public function __CONSTRUCT(){
			$this->model = new Docentes();
        }
        public function ListarDocentes()
        {
            session_start();
            require_once 'view/Docente/Docente_list.php';
        }
       
	

	}
?>