<?php

namespace App\Controllers;

use App\Models\RolModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/RolModel.php';

class RolController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function index()
    {
        echo '<br>CONTROLLER> RolController';
        echo '<br>ACTION> index';
        $this->redirectTo("rol/view");
    }
    public function view()
    {
        // echo '<br>CONTROLLER> RolController';
        // echo '<br>ACTION> view';
        //Llamamos al modelo de Rol
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();
        //Llamamos a la vista
        $data = [
            "roles" => $roles,
            "title" => "Rol de Usuario"
        ];
        $this->render('rol/viewRol.php', $data);
    }
    public function newRol(){
        $this->render('rol/newRol.php',["title" => "Nuevo Rol"]);
    }

    public function createRol(){
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            //Creamos instancia del modelo rol
            $rolObj = new RolModel();
            //Se llama al metodo que guarda en la base de datos
            $res = $rolObj->saveRol($nombre);
            $this->redirectTo("rol/view");
        }
    }

    public function viewRol($id) {
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "title" => "Rol #".$id,
            "rol" => $rolInfo,
        ];
        $this->render('rol/viewOneRol.php', $data);
    }

    public function editRol($id){
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo,
            "title" => "Editar Rol"
        ];
        $this->render('rol/editRol.php', $data);
    }

    public function updateRol(){
        if(isset($_POST['txtNombre'])){
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $rolObj = new RolModel();
            $resp = $rolObj->editRol($id, $nombre);
        }
        header('Location: /rol/view');
    }

    public function deleteRol($id)
    {
        $rolObj = new RolModel();
        $rolObj->deleteRol($id);
        $this->redirectTo("rol/view");

    }
}
