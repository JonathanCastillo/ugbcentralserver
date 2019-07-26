<?php
require 'model/Alumno.php';
require_once('controller/Alumno.controller.php');
require_once('controller/Curriculum.controller.php');
class AlumnoController
{
    private $modelo;

    private $model;
		
    public function __CONSTRUCT(){
        $this->model = new Alumno();
    }
    public function V_Agregar_Alumno()
    {
        require_once ('view/Alumno/AddAlumno.php');
    }
    public function IndexAlumno()
    {
       
        require_once ('view/Alumno/IndexAlumno.php');
    }
    public function Agregar()
    {
        $Modelo=new Alumno();

        $DUI=$_REQUEST['Dui'];
        $Nombres=$_REQUEST['Nombres'];
        $Apellidos=$_REQUEST['Apellidos'];
        $Domicilio=$_REQUEST['Domicilio'];
        $Telefono=$_REQUEST['Telefono'];
        $Email=$_REQUEST['Email'];
        $Cede=$_REQUEST['Cede'];
        $Dia=date("d");
        $Mes=date("y");
        $Posicion=substr($DUI, 0, 2);
        $Carrera=$_REQUEST['Carrera'];
        $Codigo=($Cede.$Carrera.$Posicion.$Dia.$Mes);
        if (isset($_REQUEST['Dui'])) { 
        echo $DUI.$Nombres.$Cede.$Codigo.$Telefono;
        $Modelo=$this->model->AgregarAlumno($Codigo,$DUI,$Nombres,$Apellidos,$Domicilio,$Telefono,$Email,$Carrera,$Cede);
        }
    }
    public function ViewAlumno()
    {
        session_start();
        require_once 'view/Alumno/ViewAlumno.php';
    }

}
?>