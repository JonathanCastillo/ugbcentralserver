<?php
include ("../config/config.php");
include ("../model/database.php"); 
    try
		{
            $pdo;  
	
		
			$pdo = Database::Conectar();  
			$dui=$_REQUEST['Dui'];
        	$nombres=$_REQUEST['Nombres'];
        	$apellidos=$_REQUEST['Apellidos'];
        	$domicilio=$_REQUEST['Domicilio'];
       	 	$telefono=$_REQUEST['Telefono'];
        	$email=$_REQUEST['Email'];
        	$cede=$_REQUEST['Cede'];
        	$Dia=date("d");
        	$Mes=date("y");
        	$Posicion=substr($dui, 0, 2);
        	$carrera=$_REQUEST['Carrera'];
			$codigo=($cede.$carrera.$Posicion.$Dia.$Mes);
		
            $result = array();
            $verificacion1 = $pdo->prepare("SELECT * FROM estudiante WHERE Codigo_Alumno= :Codigo AND DUI = :Dui"); 
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
                    $ruta = "../upload/photos/"; 
                    $nombrefinal= trim ($_FILES['files']['name']); //Eliminamos los espacios en blanco
                    $Nuevonombre=$codigo.mt_rand(1, 50);
                    $ruta2="upload/photos/";
                    //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                    $upload= $ruta . $Nuevonombre;  
                    $upload2= $ruta2 . $Nuevonombre;  
            
            
            
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
                                $vercarrera = $pdo->prepare("SELECT Nombre FROM carreras WHERE Abreviatura= :Carrera"); 
                                $vercarrera->bindParam(':Carrera',$carrera); 
                                $vercarrera->execute();
                                $Resultadocarrera=$vercarrera->fetch(PDO::FETCH_ASSOC);
                               //if(count($Resultado) > 0)
                             
                                $Nombre_Carrera=$Resultadocarrera['Nombre'];



                                $Semilla="BARRIOS19";
                                $Semilla_dos=2;
			                    $stm = $pdo->prepare("INSERT INTO estudiante (Codigo_Alumno,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Carrera,Foto,Cede)
                                VALUES ('$codigo','$dui','$nombres','$apellidos','$domicilio','$telefono','$email','$Nombre_Carrera','".$upload2."','$cede')");
                                $stm->execute();
                                $usercreate=  $pdo->prepare("INSERT INTO usuario (Codigo,DUI,Nombres,Apellidos,Domicilio,Telefono,Email,Password,Tipo)
                                VALUES ('$codigo','$dui','$nombres','$apellidos','$domicilio','$telefono','$email','$Semilla','".$Semilla_dos."')");
                                $usercreate->execute();
                                //return $stm->fetchAll(PDO::FETCH_OBJ);
                                echo "<script>
                                alert('El alumno fue registrado correctamente.');
                                window.location= 'Master.php?c=Usuario&a=Inicio'
                                </script>"; 
                                header("Location:  http://localhost/UGBCENTRAL/view/Usuario/index.php",TRUE,301);
                                echo '<script>alert("Alumno registrado correctamente.")</script> ';
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
?>