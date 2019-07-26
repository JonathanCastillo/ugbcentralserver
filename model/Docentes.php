<?php

require_once('controller/Docente.controller.php');
class Docentes
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
    public function ListarDocente()
    {
        try
        {
            $query="SELECT CODIGO,NOMBRES,APELLIDOS,ESPECIALIDAD,EMAIL FROM DOCENTE";
            //$resultado = array();

			$stm = $this->pdo->prepare($query);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}
