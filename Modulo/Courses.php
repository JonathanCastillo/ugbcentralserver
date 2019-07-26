<?php
#include ("../../config/config.php");
include ("../../model/database.php");
class ModCarreras
{   
    
    public function ViewCourses (){     
    try 
		{
            $pdo;  
	
		
			$pdo = Database::Conectar();     
		            
            $result = array();
			//$sql="SELECT * FROM publicacion INNER JOIN usuarios ON publicacion.Id_Usuario=usuarios.Id_Usuario INNER JOIN categoria ON publicacion.Id_Categoria=categoria.Id_Categoria";
            $Consulta="SELECT Id_Carrera,Nombre,Abreviatura FROM carreras";
            $stm = $pdo->prepare($Consulta);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		
	}
		catch (Exception $e) 
		{
			die($e->getMessage());
        }

    }
    
}
    
	
	
	
?>