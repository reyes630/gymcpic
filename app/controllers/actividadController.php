<?php

namespace App\Controllers;

use App\Models\ActividadModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ActividadModel.php';

class ActividadController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function index()
    {
        echo '<br>CONTROLLER> ActividadController';
        $this->redirectTo("rol/view");
    }

    public function view()
    {
        // Llamamos al modelo de Actividad
        $actividadObj = new ActividadModel();
        $actividades = $actividadObj->getAll();
        $data = [
            "actividades" => $actividades,
            "title" => "Actividades"
        ];
        // Llamamos a la vista
        $this->render('actividad/viewActividad.php', $data);
    }
    public function newActividad()
    {
        $this->render('actividad/newActividad.php',["title" => "Nueva Actividad"]);
    }

    public function createActividad()
    {
        if (isset($_POST['txtNombre']) || isset($_POST['txtDescripcion'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
            //Creamos instancia del modelo rol
            $actividadObj = new ActividadModel();
            //Se llama al metodo que guarda en la base de datos
            $res = $actividadObj->saveActividad($nombre,$descripcion);
            $this->redirectTo("actividad/view");
        }
    }

    public function viewActividad($id)
{
    $actividadObj = new ActividadModel();
    $actividadInfo = $actividadObj->getActividad($id);
    $data = [
        "actividad" => $actividadInfo,
        "title" => "Actividad #".$id,
    ];
    $this->render('actividad/viewOneActividad.php', $data);
}

    public function editActividad($id)
    {
        $actividadObj = new ActividadModel();
        $actividadInfo = $actividadObj->getActividad($id);
        $data = [
            "actividad" => $actividadInfo,
            "title" => "Editar Actividad"
        ];
        $this->render('actividad/editActividad.php', $data);
    }
    
    public function updateActividad()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescripcion'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
        
            $actividadObj = new ActividadModel();
            $res = $actividadObj->editActividad($id, $nombre, $descripcion);
            $this->redirectTo("actividad/view");
        }
    }

}
