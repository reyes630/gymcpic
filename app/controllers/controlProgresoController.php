<?php

namespace App\Controllers;

use App\Models\ControlProgresoModel;
use App\Models\UsuarioModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ControlProgresoModel.php';
require_once MAIN_APP_ROUTE . '../models/UsuarioModel.php';

class ControlProgresoController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function view()
    {
        $controlProgresoObj = new ControlProgresoModel();
        $controlesProgreso = $controlProgresoObj->getAll();
        $data = [
            "controlesProgreso" => $controlesProgreso,
            "title" => "Control Progreso"
        ];
        $this->render('controlProgreso/viewControlProgreso.php', $data);
    }

    public function new()
    {
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $data =[
            "usuarios" => $usuarios,
            "title" => "Nuevo Progreso"
        ];
        $this->render('controlProgreso/newControlProgreso.php', $data);
    }

    public function create()
    {
        if (isset($_POST['txtFechaRealizacion'])) {
            $fechaRealizacion = $_POST['txtFechaRealizacion'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $cintura = $_POST['txtCintura'] ?? null;
            $cadera = $_POST['txtCadera'] ?? null;
            $musloDerecho = $_POST['txtMusloDerecho'] ?? null;
            $musloIzquierdo = $_POST['txtMusloIzquierdo'] ?? null;
            $brazoDerecho = $_POST['txtBrazoDerecho'] ?? null;
            $brazoIzquierdo = $_POST['txtBrazoIzquierdo'] ?? null;
            $antebrazoDerecho = $_POST['txtAntebrazoDerecho'] ?? null;
            $antebrazoIzquierdo = $_POST['txtAntebrazoIzquierdo'] ?? null;
            $pantorrillaDerecha = $_POST['txtPantorrillaDerecha'] ?? null;
            $pantorrillaIzquierda = $_POST['txtPantorrillaIzquierda'] ?? null;
            $examenMedico = $_POST['txtExamenMedico'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fechaExamen = $_POST['txtFechaExamen'] ?? null;
            $fkIdUsuario = $_POST['fkIdUsuario'] ?? null;

            $controlProgresoObj = new ControlProgresoModel();
            $controlProgresoObj->saveControlProgreso($fechaRealizacion, $peso, $cintura, $cadera, $musloDerecho, 
                $musloIzquierdo, $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, $antebrazoIzquierdo, 
                $pantorrillaDerecha, $pantorrillaIzquierda, $examenMedico, $observaciones, $fechaExamen, $fkIdUsuario);
            $this->redirectTo("controlProgreso/view");
        }
    }

    public function viewOne($id)
    {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgreso = $controlProgresoObj->getControlProgreso($id);
        $data = ["controlProgreso" => $controlProgreso];
        $this->render('controlProgreso/viewOnecontrolProgreso.php', $data);
    }

    public function edit($id)
    {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgreso = $controlProgresoObj->getControlProgreso($id);
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $data = ["controlProgreso" => $controlProgreso, 
                 "usuarios" => $usuarios,
                 "title" => "Editar Progreso"
                ];
        $this->render('controlProgreso/editControlProgreso.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $fechaRealizacion = $_POST['txtFechaRealizacion'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $cintura = $_POST['txtCintura'] ?? null;
            $cadera = $_POST['txtCadera'] ?? null;
            $musloDerecho = $_POST['txtMusloDerecho'] ?? null;
            $musloIzquierdo = $_POST['txtMusloIzquierdo'] ?? null;
            $brazoDerecho = $_POST['txtBrazoDerecho'] ?? null;
            $brazoIzquierdo = $_POST['txtBrazoIzquierdo'] ?? null;
            $antebrazoDerecho = $_POST['txtAntebrazoDerecho'] ?? null;
            $antebrazoIzquierdo = $_POST['txtAntebrazoIzquierdo'] ?? null;
            $pantorrillaDerecha = $_POST['txtPantorrillaDerecha'] ?? null;
            $pantorrillaIzquierda = $_POST['txtPantorrillaIzquierda'] ?? null;
            $examenMedico = $_POST['txtExamenMedico'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fechaExamen = $_POST['txtFechaExamen'] ?? null;
            $fkIdUsuario = $_POST['fkIdUsuario'] ?? null;

            $controlProgresoObj = new ControlProgresoModel();
            $controlProgresoObj->editControlProgreso($id, $fechaRealizacion, $peso, $cintura, $cadera, 
                $musloDerecho, $musloIzquierdo, $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, 
                $antebrazoIzquierdo, $pantorrillaDerecha, $pantorrillaIzquierda, $examenMedico, 
                $observaciones, $fechaExamen, $fkIdUsuario);
            $this->redirectTo("controlProgreso/view");
        }
    }

    public function delete($id)
    {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgreso = $controlProgresoObj->getControlProgreso($id);
        $data = ["controlProgreso" => $controlProgreso];
        $this->render('controlProgreso/deleteControlProgreso.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $controlProgresoObj = new ControlProgresoModel();
            $controlProgresoObj->removeControlProgreso($id);
            $this->redirectTo("controlProgreso/view");
        }
    }
}