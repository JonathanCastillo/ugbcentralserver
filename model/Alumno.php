<?php
require_once ('model/database.php');
require_once ('controller/Usuario.controller.php');
class Alumno
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try 
        {
			$this->pdo = Database::Conectar();     
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function AgregarAlumno($codigo,$dui,$nombres,$apellidos,$domicilio,$telefono,$email,$carrera,$cede)
    {
        try
		{
            $result = array();
            $verificacion1 = $this->pdo->prepare("SELECT * FROM estudiante WHERE Codigo_Alumno= :Codigo AND DUI = :Dui"); 
            $verificacion1->bindParam(':Codigo',$codigo); 
            $verificacion1->bindParam(':Dui',$dui); 
            $verificacion1->execute();
            $Resultado=$verificacion1->fetch(PDO::FETCH_ASSOC);
           //if(count($Resultado) > 0)
            if($verificacion1->rowCount()==0)
            {
                if(is_uploaded_file($_FILES['files']['tmp_name'])) 
                { 
                 
                 
                    // creamos las variables para subir a la db
                    $ruta = "upload/photos/"; 
                    $nombrefinal= trim ($_FILES['files']['name']); //Eliminamos los espacios en blanco
                    $Nuevonombre=$codigo.mt_rand(1, 50);
                    //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                    $upload= $ruta . $Nuevonombre;  
            
            
            
                    if(move_uploaded_file($_FILES['files']['tmp_name'], $upload)) 
                    { //movemos el archivo a su ubicacion 
                                
                                echo "<b>Upload exitoso!. Datos:</b><br>";  
                                echo "Nombre: <i><a href=\"".$ruta . $Nuevonombre."\">".$_FILES['files']['name']."</a></i><br>";  
                                echo "Tipo MIME: <i>".$_FILES['files']['type']."</i><br>";  
                                echo "Peso: <i>".$_FILES['files']['size']." bytes</i><br>";  
                                echo "<br><hr><br>";  
                                     
            
            
                               
            
            
                            
                                //////////////////////////////////////////////////////
                                $result = array();
                                //session_start();
                                //$Id = $_SESSION['Id_Usuario'];
                                echo $upload;
                                $vercarrera = $this->pdo->prepare("SELECT Nombre FROM carreras WHERE Abreviatura= :Carrera"); 
                                $vercarrera->bindParam(':Carrera',$carrera); 
                                $vercarrera->execute();
                                $Resultadocarrera=$vercarrera->fetch(PDO::FETCH_ASSOC);
                               //if(count($Resultado) > 0)
                             
                                $Nombre_Carrera=$Resultadocarrera['Nombre'];



                                $Semilla="BARRIOS19";
                                $Semilla_dos=2;
			                    $stm = $this->pdo->prepare("INSERT INTO estudiante (Codigo_Alumno,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Carrera,Foto,Cede)
                                VALUES ('$codigo','$dui','$nombres','$apellidos','$domicilio','$telefono','$email','$Nombre_Carrera','".$upload."','$cede')");
                                $stm->execute();
                                $usercreate=  $this->pdo->prepare("INSERT INTO usuario (Codigo,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Password,Tipo)
                                VALUES ('$codigo','$dui','$nombres','$apellidos','$domicilio','$telefono','$email','$Semilla','".$Semilla_dos."')");
                                $usercreate->execute();
                                //return $stm->fetchAll(PDO::FETCH_OBJ);
                                echo "<script>
                                alert('El alumno fue registrado correctamente.');
                                window.location= 'Master.php?c=Usuario&a=Inicio'
                                </script>"; 
                    }
                }
            }
            else if($verificacion1->rowCount() > 0)
            {
                echo "<script>
            alert('El alumno ya esta registrado. Por favor vuelva a intentarlo');
            window.location= 'Master.php?c=Usuario&a=Inicio'
            </script>"; 
            }
                             
            
    
        }
		catch(Exception $e)
		{
		    die($e->getMessage());
        }

    }
    
    public function ViewEstudiante()
    {
            $result = array();
			//$sql="SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion ORDER BY Id_Publicacion DESC INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)";
			//$sql="SELECT * FROM publicacion INNER JOIN usuarios ON publicacion.Id_Usuario=usuarios.Id_Usuario INNER JOIN categoria ON publicacion.Id_Categoria=categoria.Id_Categoria";
            $Consulta="SELECT Codigo_Alumno,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Carrera,Foto,Cede FROM estudiante";
            $stm = $this->pdo->prepare($Consulta);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

    }
    public function InformacionPersonal($codigo)
    {
            $result = array();
			//$sql="SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion ORDER BY Id_Publicacion DESC INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)";
			//$sql="SELECT * FROM publicacion INNER JOIN usuarios ON publicacion.Id_Usuario=usuarios.Id_Usuario INNER JOIN categoria ON publicacion.Id_Categoria=categoria.Id_Categoria";
            $Consulta="SELECT Codigo_Alumno,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Carrera,Foto,Cede FROM estudiante WHERE Codigo_Alumno='$codigo'";
            $stm = $this->pdo->prepare($Consulta);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

    }

    public function CatalogoCarreras()
    {
            $result = array();
            $Consulta="SELECT * FROM carreras ORDER BY Nombre DESC";
            $stm = $this->pdo->prepare($Consulta);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

    }

    




}
?>