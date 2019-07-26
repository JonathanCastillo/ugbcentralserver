<?php
//require 'view/Components/Header.php';
//require 'view/Components/Footer.php';
require_once 'model/Usuario.php';
#require_once 'model/plazas.php';

class UsuarioController{
    
    private $model;
    private $model_plazas;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
        #$this->model_plazas = new Plazas();
    }
    public function Index(){
        
        require_once 'view/Usuario/Inicio.php';
    }
    public function Sigin(){
        //require_once 'view/Components/Header.php';
        require_once 'view/Usuario/Login.php';
        //require_once 'view/Components/Footer.php';
    }
    public function Inicio(){
       
        //session_start();
        require_once 'view/Usuario/index.php';
    }
    public function StartEnterprise(){
       
        //session_start();
        require_once 'view/Empresas/index.php';
    }
    


    






    //########################################################################################################################
    public function Error_reg()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Error_Reg.php';
        require_once 'view/footer.php';
    }
    public function UserList()
    {
         require_once 'view/Usuario/Userlist.php';
    }
     public function RegistrarCliente()
    {
        $consulta=new Usuario();
        $consulta=$this->model->GuardarCliente();
        echo '<script>alert("Su compra ha sido registrada.")</script> ';
        header("Location:ControlBit.php?c=Usuario&a=UserList");   
    }
     public function RegistrarSystem()
    {
        $consulta=new Usuario();
        if(isset($_REQUEST['Id_Cliente']) && isset($_REQUEST['Id_Invernadero']))
        {
        $consulta=$this->model->GuardarSistemas();
        echo '<script>alert("Su compra ha sido registrada.")</script> ';
        }
        else
        {
        echo '<script>alert("Error al realizar el proceso.")</script> ';
        //header("Location:ControlBit.php?c=Usuario&a=System");   
        }
    }
    public function Sugerencia()
    {
        require_once 'view/header.php';
        require_once 'view/Sugerencia/New_sugg.php';
        require_once 'view/footer.php';
    }
    public function Categorias()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Categorias.php';
        require_once 'view/footer.php';   
    }
      public function Publicaciones()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Publicaciones.php';
        require_once 'view/footer.php';   
    }
       public function Publicaciones_user()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Publicaciones_user.php';
        require_once 'view/footer.php';   
    }
    public function NuevoUsuario()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/New_User.php';
        require_once 'view/footer.php';
    }
    public function Foto_Perfil()
    {
        $consulta=new Usuario();
        if(isset($_FILES['Photo']))
        {
            $consulta=$this->model->Foto_Perfil();
        }
        else{
        echo '<script>alert("Se ha producido un erro.")</script> ';
        //$consulta=$this->model->Foto_Perfil();
        }
    }
    public function Publicar()
    {
                require_once 'view/header.php';
        require_once 'view/Usuario/Publicar.php';
        require_once 'view/footer.php';

    }
      public function Publicar_Articulo()
    {
        require_once 'view/header.php';
        require_once 'view/Publicar/Publicar_Articulo.php';
        require_once 'view/footer.php';

    }
    public function Explorar()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Explorer.php';
        require_once 'view/footer.php';  
    }
    public function Search()
    {
        require_once 'view/header.php';
        require_once 'view/Categorias/Search.php';
        require_once 'view/footer.php';
    }
    public function Perfil()
    {
        require_once 'view/header.php';
        require_once 'view/Usuario/Perfil1.php';
        require_once 'view/footer.php';
    }
  
  
    public function Master()
    {
        require_once 'view/header.php';
        require_once 'view/admin.php';
        require_once 'view/footer.php';
    }
   
    public function Visita()
    {
    $consulta=new Usuario();
    $Dato=$_REQUEST['Dato'];
    $consulta=$this->model->Visita($Dato);
    require_once 'view/header.php';
    require_once 'view/Usuario/Perfil2.php';
    require_once 'view/footer.php';
    }
    public function Like()
    {
        $consulta=new Usuario();
        $Dato=$_REQUEST['Id_Usuario'];
        $Dato2=$_REQUEST['Id_Publicacion'];
        $consulta=$this->model->Like($Dato,$Dato2);
    }
    public function Perfil_Visita()
    {
        require_once 'view/Usuario/Perfil2.php';
          require_once 'view/footer.php';
    }
    public function Cerrar_Sesion()
    {
        $consulta=new Usuario();
        $consulta=$this->model->Cerrar_Sesion();
    }
  
    public function Publi_Categoria()
    {
        require_once 'view/header.php';
        require_once 'view/Categorias/Publi_cat.php';
        require_once 'view/footer.php';
    }
    public function Busqueda()
    {
       $consulta=new Usuario();
        if(isset($_REQUEST['Buscar']))
        {
            $Dato=($_REQUEST['Buscar']);
            $consulta=$this->model->Buscar_new($Dato);
            require_once 'view/header.php';
            require_once 'view/Categorias/S_Publi.php';
            require_once 'view/footer.php';
        }
         else
        {
            echo '<script>alert("Se ha producido un error.")</script>';
        } 
            
        
       
    }
    public function R_Busqueda()
    {
            require_once 'view/header.php';
            require_once 'view/Categorias/S_Publi.php';
            require_once 'view/footer.php';
    }
    
    public function P_Categoria()
    {
        $consulta=new Usuario();
        if(isset($_REQUEST['Id_Categoria']))
        {
            $Id_Categoria=($_REQUEST['Id_Categoria']);
            $consulta=$this->model->Publicaciones_Cat($Id_Categoria);
            require_once 'view/header.php';
            require_once 'view/Categorias/Publi_cat.php';
            require_once 'view/footer.php';
        }
        else
        {
            echo '<script>alert("Se ha producido un error.")</script>';
        }
    }
    public function Comentar()
    {
        //$consulta=new Usuario();
        if(isset($_POST['Comentario']))
        {/*
            $consulta->$this->model->Comentar($_POST['Comentario'],$_POST['Id_Publicacion']);
*/
        $alm = new Usuario();
        $Comentario= $_POST['Comentario'];
        $Id_Publicacion= $_POST['Id_Publicacion'];
        $Ubica=$_REQUEST['Ubica'];
        $alm=$this->model->Comentar($Comentario,$Id_Publicacion,$Ubica);
        
        }
        else
        {
              echo '<script>alert("Se ha producido un erro.")</script> ';
        }

    }
        public function Comentar2()
    {
        //$consulta=new Usuario();
        if(isset($_POST['Comentario']))
        {/*
            $consulta->$this->model->Comentar($_POST['Comentario'],$_POST['Id_Publicacion']);
*/
        $alm = new Usuario();
        $Comentario= $_POST['Comentario'];
        $Id_Publicacion= $_POST['Id_Publicacion'];
        $alm=$this->model->Comentar($Comentario,$Id_Publicacion);
        header("Location:MarketPlace.php?c=Usuario&a=Perfil");
        }
        else
        {
              echo '<script>alert("Se ha producido un erro.")</script> ';
        }

    }
    public function Comentar3()
    {
        //$consulta=new Usuario();
        if(isset($_POST['Comentario']))
        {/*
            $consulta->$this->model->Comentar($_POST['Comentario'],$_POST['Id_Publicacion']);
*/
        $alm = new Usuario();
        $Comentario= $_POST['Comentario'];
        $Id_Publicacion= $_POST['Id_Publicacion'];
        $alm=$this->model->Comentar($Comentario,$Id_Publicacion);
        header("Location:MarketPlace.php?c=Usuario&a=Publicaciones");
        }
        else
        {
              echo '<script>alert("Se ha producido un erro.")</script> ';
        }

    }
    public function Validar()
    {
         $consulta= new Usuario();
         $Email=$_REQUEST['Email'];
         $Password=$_REQUEST['Password'];
         //$Tipo=$_REQUEST['Tipo'];
        if(isset($_REQUEST['Password']))
        {
                $consulta=$this->model->Validar($Email,$Password);
        }
       
    }
    public function Login()
    {  
        require_once 'view/Usuario/Login.php';
    }
    public function Crud(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['Id_Usuario'])){
            $alm = $this->model->Obtener($_REQUEST['Id_Usuario']);
        }
        
        require_once 'view/header.php';
        require_once 'view/Usuario/Usuario-editar.php';
        require_once 'view/footer.php';
    }
     public function Ajustes(){
        $alm = new Usuario();
        session_start();
        $dato=$_SESSION['Id_Usuario'];
            $alm = $this->model->Obtener($dato);   
        require_once 'view/header.php';
        require_once 'view/Usuario/Ajustes.php';
        require_once 'view/footer.php';
    }
    public function Actualizar_usr()
    {
       if (($_REQUEST['Pass'])==($_REQUEST['Re_Pass'])) {
        $alm = new Usuario();
         $alm->Id_Usuario=$_REQUEST['Id_Usuario'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Domicilio = $_REQUEST['Domicilio'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Telefono = $_REQUEST['Telefono'];
        $alm->Pass = $_REQUEST['Pass'];

        $alm->Id_Usuario > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        require_once 'view/header.php';
        require_once 'view/Usuario/Ajustes.php';
        require_once 'view/footer.php';
    } 

    else
    {
         echo '<script>alert("Las contraseñas no coinciden.")</script> ';
        
        
        require_once 'view/Usuario/Menu.php';
        require_once 'view/footer.php';
    }
    }
    public function Guardar(){
        if (($_REQUEST['Pass'])==($_REQUEST['Re_Pass'])) {
        $alm = new Usuario();
        $alm->Id_Usuario=$_REQUEST['Id_Usuario'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Domicilio = $_REQUEST['Domicilio'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Telefono = $_REQUEST['Telefono'];
        $alm->Pass = $_REQUEST['Pass'];

        $alm->Id_Usuario > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        require_once 'view/header.php';
        require_once 'view/Usuario/Ajustes.php';
        require_once 'view/footer.php';
    }
    else
    {
         
          header("Location:MarketPlace.php?c=Usuario&a=Crud");
          echo '<script>alert("Las contraseñas no coinciden.")</script> ';
    }

    }
     public function Nuevo(){
        if (($_REQUEST['Pass'])==($_REQUEST['Re_Pass'])) {
        $alm = new Usuario();
        /*
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Domicilio = $_REQUEST['Domicilio'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Pass = $_REQUEST['Pass'];
        $alm->Edad = $_REQUEST['Edad'];*/
        $Nombre = $_REQUEST['Nombre'];
        $Domicilio = $_REQUEST['Domicilio'];
        $Correo = $_REQUEST['Correo'];
        $Pass = $_REQUEST['Pass'];
        $Edad = $_REQUEST['Edad'];
        $alm=$this->model->Registrar($Nombre,$Domicilio,$Correo,$Pass,$Edad);
        require_once 'view/header.php';
        require_once 'view/Login.php';
        require_once 'view/footer.php';
    }
    else
    {
         
          header("Location:MarketPlace.php?c=Usuario&a=Nuevo");
          echo '<script>alert("Las contraseñas no coinciden.")</script> ';
    }
}
    public function Denunciar()
    {
        if(isset($_REQUEST['Id_Publicacion'])){
        $alm=new Usuario();
        $data=$_REQUEST['Id_Publicacion'];
        $this->model->Denunciar($data);
    }
    else{
        echo '<script>alert("Se produjo un error")</script>';
    
    header("Location:../view/Usuario/Publicaciones.php");
    }
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Id_Usuario']);
        header('Location: indexUsuario.php');
    }
}