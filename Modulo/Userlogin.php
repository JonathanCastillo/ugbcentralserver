<?php
include ("../config/config.php");
include ("../model/database.php");
		try 
		{
            $pdo;  
	
		
			$pdo = Database::Conectar();     
		
            $SERVERURL="http://localhost/UGBCENTRAL/";
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];
			$login = $pdo->prepare("SELECT * FROM usuario WHERE Codigo= :Email AND Password = :Password"); 
            $login->bindParam(':Email',$Email); 
            $login->bindParam(':Password',$Password); 
            $login->execute();
            $Resultado=$login->fetch(PDO::FETCH_ASSOC);
           //if(count($Resultado) > 0)
            if($login->rowCount() > 0)
          {
            if($Resultado['Tipo']=="1"){
						session_start();
            $_SESSION['Codigo'] = $Resultado['Codigo'];
            $_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
                //$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
						#$consulta=new UsuarioController();
                        #$consulta->Inicio();
                        echo SERVERURL;
                        header("Location:  http://localhost/UGBCENTRAL/view/Usuario/index.php",TRUE,301);
						echo '<script>alert("Bienvenido, al area de administracion.")</script> ';
						}
						elseif($Resultado['Tipo']=="2")
						{
							session_start();
							$_SESSION['Codigo'] = $Resultado['Codigo'];
							$_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
									//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
							$_SESSION['SesionStatus']=1;
							#$consulta=new AlumnoController();
							#$consulta->IndexAlumno();
							header("Location:  http://localhost/UGBCENTRAL/view/Alumno/IndexAlumno.php",TRUE,301);
						echo '<script>alert("Bienvenido, al area de administracion.")</script> ';
						}

						elseif($Resultado['Tipo']=="3")
						{
							session_start();
							$_SESSION['Codigo'] = $Resultado['Codigo'];
							$_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
									//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
							$_SESSION['SesionStatus']=1;
							$consulta=new UsuarioController();
							$consulta->Inicio();
							echo '<script>alert("Bienvenido, docente")</script> ';
						}
######################################################################################################################
							

							
				
			}
             else
             {
             	echo '<script>alert("Error, intentalo de nuevo.")</script> ';
				      #$consulta=new UsuarioController();
        		header("location:Master.php?c=Usuario&a=Login");
                return false;
             }
		
	}
		catch (Exception $e) 
		{
			die($e->getMessage());
        }
    
	
	
	
?>