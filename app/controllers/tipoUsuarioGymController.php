<?php

namespace App\Controllers;

use App\Models\TipoUsuarioGymModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/TipoUsuarioGymModel.php';

class TipoUsuarioGymController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function view(){
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tiposUsuario = $tipoUsuarioObj->getAll();
        $data = [
            "tiposUsuario" => $tiposUsuario,
            "title" => "Tipo Usuario"
        ];
        $this->render('tipoUsuarioGym/viewTipoUsuarioGym.php', $data);
    }

    public function new()
    {
        $this->render('tipoUsuarioGym/newTipoUsuarioGym.php', ["title" => "Nuevo Tipo"]);
    }

    public function create()
    {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoUsuarioObj = new TipoUsuarioGymModel();
            $tipoUsuarioObj->saveTipoUsuario($nombre);
            $this->redirectTo("tipoUsuarioGym/view");
        }
    }

    public function viewOne($id)
    {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuario = $tipoUsuarioObj->getTipoUsuario($id);
        $data = ["tipoUsuario" => $tipoUsuario];
        $this->render('tipoUsuarioGym/viewOneTipoUsuarioGym.php', $data);
    }

    public function edit($id)
    {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuario = $tipoUsuarioObj->getTipoUsuario($id);
        $data = ["tipoUsuario" => $tipoUsuario,
                 "title" => "Editar Tipo"
    ];
        $this->render('tipoUsuarioGym/editTipoUsuarioGym.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoUsuarioObj = new TipoUsuarioGymModel();
            $tipoUsuarioObj->editTipoUsuario($id, $nombre);
            $this->redirectTo("tipoUsuarioGym/view");
        }
    }

    public function delete($id)
    {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuario = $tipoUsuarioObj->getTipoUsuario($id);
        $data = ["tipoUsuario" => $tipoUsuario];
        $this->render('tipoUsuarioGym/deleteTipoUsuarioGym.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $tipoUsuarioObj = new TipoUsuarioGymModel();
            $tipoUsuarioObj->removeTipoUsuario($id);
            $this->redirectTo("tipoUsuarioGym/view");
        }
    }
}