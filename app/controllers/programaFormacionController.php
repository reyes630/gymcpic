<?php

namespace App\Controllers;

use App\Models\ProgramaFormacionModel;
use App\Models\CentroFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ProgramaFormacionModel.php';
require_once MAIN_APP_ROUTE . '../models/CentroFormacionModel.php';
                        

class ProgramaFormacionController extends BaseController
{

    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function index()
    {
        echo '<br>CONTROLLER> ProgramaFormacionController';
        echo '<br>ACTION> index';
        $this->redirectTo("programaFormacion/view");
    }

    public function view()
    {

        //Validacion de sesion de usuarios
        if (isset($_SESSION['rol'])) {
            header('Location: /login/init');
        }else{
            if (in_array($_SESSION['rol'],[1,2])) {//admin, triner
                header('Location: /login/init');
            }
        }


        // Llamamos al modelo de ProgramaFormacion
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaFormacion = $programaFormacionObj->getAll();
        // Llamamos a la vista
        $data = [
            "title" => "Programa Formación",
            "programas" => $programaFormacion
        ];
        $this->render('programaFormacion/viewProgramaFormacion.php', $data);
    }

    public function newProgramaFormacion()
    {   
        $centroFormacionObj = new CentroFormacionModel();
        $centros = $centroFormacionObj->getAll(); 
        $data =  [
            "centrosFormacion"=>$centros,
            "title" => "Nuevo Programa"
        ];

        $this->render('programaFormacion/newProgramaFormacion.php',$data);
    }

    public function createProgramaFormacion()
    {
        if (isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['fkidcentroformacion'])) {
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkidcentroformacion = $_POST['fkidcentroformacion'] ?? null;

            // Creamos instancia del modelo programa de formación
            $programaFormacionObj = new ProgramaFormacionModel();
            // Se llama al método que guarda en la base de datos
            $res = $programaFormacionObj->saveProgramaFormacion($codigo, $nombre, $fkidcentroformacion);
            $this->redirectTo("programaFormacion/view");
        }
    }
    public function viewProgramaFormacion($id)
    {
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaInfo = $programaFormacionObj->getProgramaFormacion($id);
        $data = [
            "programa" => $programaInfo,
            "title" => "Programa Formación #".$id,
        ];
        $this->render('programaFormacion/viewOneProgramaFormacion.php', $data);
    }

    public function editProgramaFormacion($id) {
        $programaFormacionObj = new ProgramaFormacionModel();
        $programaInfo = $programaFormacionObj->getProgramaFormacion($id);
    
        $centroFormacionObj = new CentroFormacionModel();
        $centrosFormacion = $centroFormacionObj->getAll();  
    
        $data = [
            "programa" => $programaInfo,
            "centrosFormacion" => $centrosFormacion,  
            "title" => "Editar Programa Formación",
            
        ];
        $this->render('programaFormacion/editProgramaFormacion.php', $data);
    }
    

    public function updateProgramaFormacion() {
        if (isset($_POST['txtId']) && isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['fkidcentroformacion'])) {
            $id = $_POST['txtId'] ?? null;
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkidcentroformacion = $_POST['fkidcentroformacion'] ?? null;

            $programaFormacionObj = new ProgramaFormacionModel();
            $res = $programaFormacionObj->editProgramaFormacion($id, $codigo, $nombre, $fkidcentroformacion);
            $this->redirectTo("programaFormacion/view");
        }
    }

    public function deletePrograma($id)
    {
        $rolObj = new ProgramaFormacionModel();
        $rolObj->deletePrograma($id);
        $this->redirectTo("programaFormacion/view");

    }
}