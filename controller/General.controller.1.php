<?php
	require_once 'Model/Transacciones.php';
	
	class GeneralController{
		private $model;
		
		public function __CONSTRUCT(){
			$this->model = new Transaccion();
		}
	

	}
?>