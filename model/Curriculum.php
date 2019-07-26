<?php

require_once('controller/Usuario.controller.php');
require_once('controller/Curriculum.controller.php');
class Curriculum
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
    public function Upload($Titulo,$Descripcion)
    {
        try
		{
            $result = array();

			
   
              
                if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
                 
                 
                  // creamos las variables para subir a la db
                    $ruta = "upload/"; 
                    $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
                    //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                    $NuevoNombre=$Titulo."_".$_SESSION['user'].mt_rand(1, 50); 
                    $upload= $ruta . $nombrefinal;  
                    $publicar = $ruta.$NuevoNombre.".pdf";
            
            if($_FILES['fichero']['type']=="application/pdf"){
                    if(move_uploaded_file($_FILES['fichero']['tmp_name'], $publicar)) { //movemos el archivo a su ubicacion 
                                
                                echo "<b>Upload exitoso!. Datos:</b><br>";  
                                echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                                echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                                echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                                echo "<br><hr><br>";  
                                     
            
            
            ######################################################################################################################
            session_start();
            $Id_Usuario=$_SESSION['Id_Usuario'];
            $comprobacion = $this->pdo->prepare("SELECT * from curriculum where Id_Usuario='$Id_Usuario'");
			$comprobacion->execute();

			//$Resultado= $comprobacion->fetchAll(PDO::FETCH_OBJ);
			
            if($comprobacion->rowCount() > 0)
            {
                $Id_Usuario=$_SESSION['Id_Usuario'];
                $actualizacion = $this->pdo->prepare("UPDATE curriculum set Id_Usuario='$Id_Usuario', Nombre='$Titulo', Descripcion='$Descripcion',Tipo='".$_FILES['fichero']['type']."',Ruta='$publicar' where Id_Usuario='$Id_Usuario'");
                $actualizacion->execute();
                echo "<script>
                alert('Su curriculum, ha sido actualizado.');
                window.location= 'Master.php?c=User&a=Profile'
                </script>";
            }
            elseif ($comprobacion->rowCount() < 1){
            


            #####################################################################################################################
            
            
                               $query = "INSERT INTO archivos (name,description,ruta,tipo,size) 
                VALUES ('$Titulo','$Descripcion','".$Nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 
            //////////////////////////////////////////////////////
            $result = array();
            
            $Id = $_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("INSERT INTO curriculum (Id_Usuario,Nombre,Descripcion,Tipo,Ruta) 
            VALUES ('$Id','$Titulo','$Description','".$_FILES['fichero']['type']."','".$publicar."')");
			$stm->execute();

            //return $stm->fetchAll(PDO::FETCH_OBJ);
            echo "<script>
                alert('Su curriculum, fue publicado correctamente.');
                window.location= 'Master.php?c=User&a=Profile'
                </script>"; 
            }
            }  
        }      
        else
        {
            echo "<script>
                alert('Error al cargar el curriculum, por favor suba su curriculum en formato PDF.');
                window.location= 'Master.php?c=Curriculum&a=Upload'
                </script>";
        }  
        //header("location:Master.php?c=Usuario&a=Inicio");
        }
     
 }
		catch(Exception $e)
		{
			die($e->getMessage());
        }
    }
    public function UploadFicha($Nombre,$Domicilio,$Profesion,$Estudios,$Descripcion)
    {
        try
		{
              
                if(is_uploaded_file($_FILES['files']['tmp_name'])) { 
                 
                 
                  // creamos las variables para subir a la db
                    $ruta = "upload/photos/"; 
                    $nombrefinal= trim ($_FILES['files']['name']); //Eliminamos los espacios en blanco
                    //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                    $upload= $ruta . $nombrefinal;  
            
            
            
                    if(move_uploaded_file($_FILES['files']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                                
                                echo "<b>Upload exitoso!. Datos:</b><br>";  
                                echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['files']['name']."</a></i><br>";  
                                echo "Tipo MIME: <i>".$_FILES['files']['type']."</i><br>";  
                                echo "Peso: <i>".$_FILES['files']['size']." bytes</i><br>";  
                                echo "<br><hr><br>";  
                                     
            
            
                               
            
            
                            
            //////////////////////////////////////////////////////
            $result = array();
            session_start();
            $Id = $_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("INSERT INTO ficha (Id_Usuario,Nombre,Domicilio,Profesion,Estudios,Descripcion,FotoRuta) 
            VALUES ('$Id','$Nombre','$Domicilio','$Profesion','$Estudios','$Descripcion','".$upload."')");
			$stm->execute();

            //return $stm->fetchAll(PDO::FETCH_OBJ);
            }          
        }
    
 }
		catch(Exception $e)
		{
			die($e->getMessage());
        }
    }
}
