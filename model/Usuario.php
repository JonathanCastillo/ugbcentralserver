<?php
require_once('controller/Usuario.controller.php');
require_once('controller/Alumno.controller.php');
class Usuario
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
	
	public function IniSesion()
	{
		session_start();
	}
	public function Validar($Email,$Password)
	{
		try 
		{
			$login = $this->pdo->prepare("SELECT * FROM usuario WHERE Codigo= :Email AND Password = :Password"); 
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
						$consulta=new UsuarioController();
						$consulta->Inicio();
						echo '<script>alert("Bienvenido, al area de administracion.")</script> ';
						}
						elseif($Resultado['Tipo']=="2")
						{
							session_start();
							$_SESSION['Codigo'] = $Resultado['Codigo'];
							$_SESSION['user'] = $Resultado['Nombres']." ".$Resultado['Apellidos'];
									//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
							$_SESSION['SesionStatus']=1;
							$consulta=new AlumnoController();
							$consulta->IndexAlumno();
							echo '<script>alert("Bienvenido, estudiante")</script> ';
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
	
	}
	public function ValidarEmpresa($Email,$Password)
	{
						try{
							
								$login2 = $this->pdo->prepare("SELECT * FROM empresas WHERE Email= :Email AND Password = :Password"); 
								$login2->bindParam(':Email',$Email); 
								$login2->bindParam(':Password',$Password); 
								$login2->execute();
								$Resultado2=$login2->fetch(PDO::FETCH_ASSOC);
								if($login2->rowCount() > 0)
								{
									
									session_start();
									$_SESSION['Id_Empresa'] = $Resultado2['Id_Empresa'];
									$_SESSION['user'] = $Resultado2['Nombre'];
											//$_SESSION['Foto_Perfil'] = $Resultado['Foto_Perfil'];
											echo "<script>
											alert('Bienvenido al area de empresas.');
											window.location= 'Master.php?c=Usuario&a=StartEnterprise'
											</script>";
								}
								else 
								{
									echo "<script>
											alert('Datos erroneos, vuelva a intentarlo.');
											window.location= 'Master.php?c=Usuario&a=Login'
											</script>";
								}	
							}
							catch (Exception $e) 
		{
			die($e->getMessage());
		}

	}



	public function Cerrar_Sesion()
	{
	session_start();
	session_destroy();
	$consulta=new UsuarioController();
    $consulta->Index();
	exit(); 	
	}
	
	
	public function Foto()
	{
		
		try
		{
			$result = array();
			$Dato=$_SESSION['Id_Usuario'];
			$stm = $this->pdo->prepare("SELECT Foto_Perfil FROM Usuarios WHERE Id_Usuario='$Dato'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

		public function Domicilios()
		{

			$resultado= array();
			$stm= $this->pdo->prepare("SELECT Id_Domicilio,Departamento,Municipio FROM Domicilios ");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}


		public function Listartop()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios  ORDER BY Valoraciones DESC LIMIT 3");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($Id_Usuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE Id_Usuario = ?");
			          

			$stm->execute(array($Id_Usuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($Id_Usuario)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuarios WHERE Id_Usuario = ?");			          

			$stm->execute(array($Id_Usuario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Foto_Perfil()
	{
	session_start();
	$id=$_SESSION['Id_Usuario'];/*
	$login = $this->pdo->prepare("SELECT Foto_Perfil FROM usuarios WHERE Id_Usuario = $id"); 
        //$login->bindParam(':Id_Usuario',$id); 
            $login->execute(); 
            //Modificado
            $Resultado=$login->fetch(PDO::FETCH_ASSOC);
           if(count($Resultado) > 0)
          {
*/	//$_FILES=$Photo;
    session_start();
	echo '<pre>';
	print_r($_FILES['Photo']);
	echo '</pre>';
	$ruta = "assets/Imagenes/Fotos_Perfil/";
	$temporal=$_FILES['Photo']['tmp_name'];
	$nombre=$_FILES['Photo']['name'];
	$destino = "assets/Imagenes/Fotos_Perfil/".$nombre;
	$destino2 = "assets/Imagenes/Thumbnails/".$nombre;
	//Abrir foto original
	//$ancho_nuevo=60;
	//$alto_nuevo= round ($ancho_nuevo * $alto_nuevo / $ancho_original);
	if($_FILES['Photo']['type']=='image/jpeg'){
	$original=imagecreatefromjpeg($temporal);
}else if($_FILES['Photo']['type']=='image/png'){
	$original=imagecreatefrompng($temporal);
}else
{
	die ('No se pudo generar la imagen');
	$consulta=new UsuarioController();
    $consulta->Perfil();
	exit(); 
}
$ancho_original=imagesx($original);
	$alto_original=imagesy($original); 
	//Crear lienzo vacio(foto_Destino 100px 100px)
	$copia=imagecreatetruecolor(60,60);
	//copiar original->copia
	//1-2 destino-original
	//3-4 eje X_Y pegado-->0,0
	//5-6 eje X_Y original -->0,0
	//7-8 ancho-alto del destino -->Width-Height--definido antes
	//9-10 ancho-alto original -->Width-Height
 	imagecopyresampled($copia, $original, 0,0, 0,0,60,60,$ancho_original,$alto_original);
	//Guardar imagen
 	imagejpeg($copia,$destino2,100);
	//
	imagedestroy($original);
	imagedestroy($copia);
	//
	if (!file_exists($destino)){
	move_uploaded_file($temporal,'assets/Imagenes/Fotos_Perfil/'.$nombre);
	$sql="UPDATE usuarios SET Foto_Perfil='$destino',Thumbnails='$destino2' WHERE Id_Usuario='$id'";
	$this->pdo->prepare($sql)->execute();
	/*$consulta=new UsuarioController();
    $consulta->Perfil();*/
    header("location:MarketPlace.php?c=Usuario&a=Perfil");
	exit(); 
	}else
	{echo '<script>alert("Error, este archivo ya existe.")</script> ';}
	/*}
	else
	{
		echo '<script>alert("Hola, ya tienes una foto de perfil.")</script> ';
		$consulta=new UsuarioController();
    $consulta->Perfil();
	exit(); 
	}*/
	}

	public function Comentar($Comentario,$Id_Publicacion,$Ubica)
	{
		try{

		session_start();
		$Usuario=$_SESSION['Id_Usuario'];
		$fecha = date('Y-m-d H:i:s');
		//$sql="INSERT INTO comentarios(Contenido,Fecha,Id_Publicacion,Id_Usuario) VALUES ($Comentario,$Now(),$Id_Publicacion,$Usuario)";


			$sql = "INSERT INTO comentarios (Contenido,Fecha,Id_Publicacion,Id_Usuario) VALUES ('$Comentario','$fecha','$Id_Publicacion','$Usuario')";

			$this->pdo->prepare($sql)
			     ->execute();
			     header("location:MarketPlace.php?$Ubica");
				
	}
	catch(Exception $e)
	{
		die($e->getMessage());
	}
	}
	public function Notificaciones()
	{
		try
		{
			$Dato=$_SESSION['Id_Usuario'];
			$result=array();
			$stm=$this->pdo->prepare("SELECT Id_Notificacion,Id_Publicacion,Emisor,Contenido FROM Notificaciones_user WHERE Id_Usuario=$Dato");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Actualizar($data)
	{
		try 
		{
			$Clave="MarketPlace_Sv";
			/*$sql = "INSERT INTO usuarios (Nombre,Domicilio,Correo,Pass,Estado,
						Fecha_Ing,Foto_Perfil,Telefono,Edad) 
		        VALUES (?,?,?,AES_ENCRYPT(?, '$Clave'),$Estado,Now(),'$Foto_Perfil','$Telefono',?)";*/
			$sql = "UPDATE usuarios SET 
						Nombre        = ?, 
						Domicilio = ?,
						Correo =?,
						Pass=AES_ENCRYPT(?,'$Clave'),
						Telefono=?

				    WHERE Id_Usuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Domicilio,
                        $data->Correo,
                        $data->Pass,
                        $data->Telefono,
                        $data->Id_Usuario
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Visita($Dato)
	{
		try
		{
			$result=array();
			$stm=$this->pdo->prepare("SELECT usr.Id_Usuario,usr.Nombre,usr.Domicilio,usr.Correo,usr.Foto_Perfil,usr.Telefono,usr.Valoraciones FROM usuarios usr WHERE Id_Usuario=$Dato");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Comentarios($dato)
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT usr.Id_Usuario,
           usr.Thumbnails, usr.Nombre,c.Fecha, c.Id_Comentario, c.Contenido  FROM comentarios c INNER JOIN usuarios usr ON c.Id_Usuario=usr.Id_Usuario  WHERE c.Id_Publicacion=$dato ORDER BY c.Id_Comentario DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}	
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Likes_and_comenst($Dato)
	{
		try
		{
		$result = array();
		$stm = $this->pdo->prepare("SELECT (Id_Publicacion_like) FROM likes WHERE Id_Publicacion_like='$Dato'");
		$stm->execute();
		$Cuenta=$stm->rowCount();
		echo $Cuenta;
			return $Cuenta;
			
			}	
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Coments($Dato)
	{
		try
		{
		$result = array();
		$stm = $this->pdo->prepare("SELECT (Id_Comentario) FROM comentarios WHERE Id_Publicacion='$Dato'");
		$stm->execute();
		$Cuenta=$stm->rowCount();
		echo $Cuenta;
			return $Cuenta;
			
			}	
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Noticias()
	{
		try
		{
			$result = array();
			$sql="SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion ORDER BY Id_Publicacion DESC INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)";
			//$sql="SELECT * FROM publicacion INNER JOIN usuarios ON publicacion.Id_Usuario=usuarios.Id_Usuario INNER JOIN categoria ON publicacion.Id_Categoria=categoria.Id_Categoria";
			$stm = $this->pdo->prepare("SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.Estado,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Correo,usuarios.Domicilio,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)WHERE publicacion.Estado=1 AND N_Denuncias<6 ORDER BY Id_Publicacion DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
			//$this->pdo->prepare($sql)->execute();
			//$Resultado=$sql->fetchAll(PDO::FETCH_OBJ);
			//return $Resultado;

           //if(count($Resultado)>0)
           //{
           //	$Descripcion=$Resultado['Descripcion'];
           	//$Id_Usuario=$Resultado['Id_Usuario'];
           	//$Id_Categoria=$Resultado['Nombre'];
           	/*$sql="SELECT Foto_Perfil from usuarios WHERE Id_Usuario=$Id_Usuario";
           	$this->pdo-prepare($sql)->execute();
           	$Resultado_u=$sql->fetch(PDO::FETCH_ASSOC);
           	if(count($Resultado_u>0))
           	{
           		$Foto_usuario=$Resultado_u['Foto_Perfil'];
           	}
           	$consulta="SELECT Nombre from categorias WHERE Id_Categoria=Id_Categoria";
           	$this->pdo->prepare($consulta)->execute();
           	$Resultado_c=$consulta->fetch(PDO::FETCH_ASSOC);
           	if(count($Resultado_c>0))
           	{
           		$Categoria_name=$Resultado_c['Nombre'];
           	}
           }*/
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Fotos_p($Publicacion)
	{
		try
		{
			$result = array();
			$sql="SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion ORDER BY Id_Publicacion DESC INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)";
			//$sql="SELECT * FROM publicacion INNER JOIN usuarios ON publicacion.Id_Usuario=usuarios.Id_Usuario INNER JOIN categoria ON publicacion.Id_Categoria=categoria.Id_Categoria";
			$stm = $this->pdo->prepare("SELECT * from fotos_publicaciones WHERE Id_Publicacion='$Publicacion'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Publicaciones_Cat($Id_Categoria)
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT
           pub.Id_Publicacion,pub.Id_Categoria,pub.Descripcion,pub.Foto_articulo, pub.Precio, pub.Fecha,pub.Estado,pub.N_Denuncias,usr.Id_Usuario,usr.Thumbnails,usr.Nombre,usr.Correo,usr.Domicilio,usr.Telefono,cat.Nombre_categoria FROM publicacion pub INNER JOIN usuarios usr ON (pub.Id_Usuario=usr.Id_Usuario) INNER JOIN categoria cat on (pub.Id_Categoria=cat.Id_Categoria) WHERE pub.Id_Categoria=? AND pub.Estado=1 AND pub.N_Denuncias<6 ORDER BY pub.Id_Publicacion DESC");
			$stm->execute(array($Id_Categoria));
			return $stm->fetchAll(PDO::FETCH_OBJ);
			$Valid=$stm->fetchAll(PDO::FETCH_OBJ);
			/*if(count()>0){
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			else
			{
			echo '<script> alert("No hay publicaciones que mostrar :(")</script>';
			$consulta=new UsuarioController();
        	$consulta->Categorias();
			exit();
		}*/
			//if(count($stm) > 0){
			//return $stm->fetchAll(PDO::FETCH_OBJ);
			//$consulta=new UsuarioController();
        	//$consulta->Publi_Categoria();
		}
		/*else
		{
			echo "Aún no hay publicaciones en esta categoría";
		}
		}*/
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Buscar_new($Dato)
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT
           pub.Id_Publicacion,pub.Descripcion,pub.Foto_articulo, pub.Precio, pub.Fecha,pub.Estado,pub.N_Denuncias,usr.Thumbnails,usr.Nombre,usr.Correo,usr.Domicilio,usr.Telefono,usr.Id_Usuario,cat.Nombre_categoria FROM publicacion pub INNER JOIN usuarios usr ON (pub.Id_Usuario=usr.Id_Usuario) INNER JOIN categoria cat on (pub.Id_Categoria=cat.Id_Categoria) WHERE pub.N_Denuncias<6 AND pub.Estado=1 AND pub.Descripcion LIKE '%$Dato%' OR pub.Precio LIKE '%$Dato%' OR usr.Domicilio LIKE '%$Dato%' ORDER BY pub.Id_Publicacion DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			$consulta=new UsuarioController();
        	$consulta->R_Busqueda();
        	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Noticias_user($Id_Usuario)
	{
		try
		{
			
			$result = array();
			$stm = $this->pdo->prepare("SELECT publicacion.Id_Publicacion,publicacion.Descripcion,publicacion.Foto_articulo,publicacion.Precio,publicacion.Fecha,publicacion.Id_Usuario,publicacion.Estado,publicacion.N_Denuncias,usuarios.Thumbnails,usuarios.Correo,usuarios.Domicilio,usuarios.Nombre,usuarios.Telefono,categoria.Nombre_categoria FROM publicacion INNER JOIN usuarios on (publicacion.Id_Usuario=usuarios.Id_Usuario) INNER JOIN categoria on (publicacion.Id_Categoria=categoria.Id_Categoria)WHERE publicacion.Id_Usuario='$Id_Usuario' AND publicacion.Estado=1 AND N_Denuncias<6 ORDER BY Id_Publicacion DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Registrar($Nombre,$Domicilio,$Correo,$Pass,$Edad)
	{
		try 
		{
		$Clave="MarketPlace_Sv";
		$Foto_Perfil="assets/Imagenes/Fotos_Perfil/Default.png";
		$Estado=1;
		$Telefono='Desconocido';

			$sql = "INSERT INTO usuarios (Nombre,Domicilio,Correo,Pass,Estado,
						Fecha_Ing,Foto_Perfil,Telefono,Edad) 
		        VALUES ('$Nombre','$Domicilio','$Correo',AES_ENCRYPT('$Pass', '$Clave'),$Estado,Now(),'$Foto_Perfil','$Telefono','$Edad')";       
			$this->pdo->prepare($sql)
		     ->execute();

		} 
		catch (Exception $e) 
			{
			die($e->getMessage());
			}

	}
	

	public function ListarAdmin()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM administrador");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}