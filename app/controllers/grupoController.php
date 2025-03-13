<?php

namespace App\Controllers;

use App\Models\GrupoModel;
use App\Models\ProgramaFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/GrupoModel.php';
require_once MAIN_APP_ROUTE . '../models/ProgramaFormacionModel.php';

class GrupoController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function view()
    {
        $grupoObj = new GrupoModel();
        $grupos = $grupoObj->getAll();
        $data = ["grupos" => $grupos];
        $this->render('grupo/viewGrupo.php', $data);
    }

    public function new()
    {
        $programaObj = new ProgramaFormacionModel();
        $programas = $programaObj->getAll();
        $this->render('grupo/newGrupo.php', ["programas" => $programas]);
    }

    public function create()
    {
        if (isset($_POST['txtFicha']) && isset($_POST['txtCantAprendices']) && isset($_POST['txtEstado']) && 
            isset($_POST['txtFechaIniLectiva']) && isset($_POST['txtFechaFinLectiva']) && isset($_POST['fkIdProgForm'])) {
            $ficha = $_POST['txtFicha'] ?? null;
            $cantAprendices = $_POST['txtCantAprendices'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $fechaIniLectiva = $_POST['txtFechaIniLectiva'] ?? null;
            $fechaFinLectiva = $_POST['txtFechaFinLectiva'] ?? null;
            $fkIdProgForm = $_POST['fkIdProgForm'] ?? null;

            $grupoObj = new GrupoModel();
            $grupoObj->saveGrupo($ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm);
            $this->redirectTo("grupo/view");
        }
    }

    public function viewGrupo($id)
    {
        $grupoObj = new GrupoModel();
        $grupoInfo = $grupoObj->getGrupo($id);
        $data = ["grupo" => $grupoInfo];
        $this->render('grupo/viewOneGrupo.php', $data);
    }

    public function edit($id)
    {
        $grupoObj = new GrupoModel();
        $grupoInfo = $grupoObj->getGrupo($id);
        $programaObj = new ProgramaFormacionModel();
        $programas = $programaObj->getAll();
        $data = [
            "grupo" => $grupoInfo,
            "programas" => $programas
        ];
        $this->render('grupo/editGrupo.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtFicha']) && isset($_POST['txtCantAprendices']) && 
            isset($_POST['txtEstado']) && isset($_POST['txtFechaIniLectiva']) && isset($_POST['txtFechaFinLectiva']) && 
            isset($_POST['fkIdProgForm'])) {
            $id = $_POST['txtId'] ?? null;
            $ficha = $_POST['txtFicha'] ?? null;
            $cantAprendices = $_POST['txtCantAprendices'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $fechaIniLectiva = $_POST['txtFechaIniLectiva'] ?? null;
            $fechaFinLectiva = $_POST['txtFechaFinLectiva'] ?? null;
            $fkIdProgForm = $_POST['fkIdProgForm'] ?? null;

            $grupoObj = new GrupoModel();
            $grupoObj->editGrupo($id, $ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm);
            $this->redirectTo("grupo/view");
        }
    }

    public function delete($id)
    {
        $grupoObj = new GrupoModel();
        $grupoInfo = $grupoObj->getGrupo($id);
        $data = ["grupo" => $grupoInfo];
        $this->render('grupo/deleteGrupo.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $grupoObj = new GrupoModel();
            $grupoObj->removeGrupo($id);
            $this->redirectTo("grupo/view");
        }
    }
}