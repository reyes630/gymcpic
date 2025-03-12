<?php

namespace App\Controllers;

use App\Models\RegistroIngresoModel;
use App\Models\UsuarioModel;
use App\Models\ActividadModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/RegistroIngresoModel.php';
require_once MAIN_APP_ROUTE . '../models/UsuarioModel.php';
require_once MAIN_APP_ROUTE . '../models/ActividadModel.php';

class RegistroIngresoController extends BaseController
{
    public function view()
    {
        $registroIngresoObj = new RegistroIngresoModel();
        $registrosIngreso = $registroIngresoObj->getAll();
        $data = ["registrosIngreso" => $registrosIngreso];
        $this->render('registroIngreso/viewRegistroIngreso.php', $data);
    }

    public function new()
    {
        $usuarioObj = new UsuarioModel();
        $actividadObj = new ActividadModel();

        $usuarios = $usuarioObj->getAll();
        $actividades = $actividadObj->getAll();

        $data = [
            "usuarios" => $usuarios,
            "actividades" => $actividades,
        ];
        $this->render('registroIngreso/newRegistroIngreso.php', $data);
    }

    public function create()
    {
        if (isset($_POST['txtFechaIn']) && isset($_POST['fkIdUserGym'])) {
            $fechaIn = $_POST['txtFechaIn'] ?? null;
            $fechaOut = $_POST['txtFechaOut'] ?? null;
            $fkIdUserGym = $_POST['fkIdUserGym'] ?? null;
            $fkIdActividad = $_POST['fkIdActividad'] ?? null;
            $fkIdTrainer = $_POST['fkIdTrainer'] ?? null;

            $registroIngresoObj = new RegistroIngresoModel();
            $registroIngresoObj->saveRegistroIngreso($fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer);
        }
        $this->redirectTo("registroIngreso/view");
    }

    public function viewOne($id)
    {
        $registroIngresoObj = new RegistroIngresoModel();
        $registroIngreso = $registroIngresoObj->getRegistroIngreso($id);
        $data = ["registroIngreso" => $registroIngreso];
        $this->render('registroIngreso/viewOneRegistroIngreso.php', $data);
    }

    public function edit($id)
    {
        $registroIngresoObj = new RegistroIngresoModel();
        $registroIngreso = $registroIngresoObj->getRegistroIngreso($id);
        
        $usuarioObj = new UsuarioModel();
        $actividadObj = new ActividadModel();

        $usuarios = $usuarioObj->getAll();
        $actividades = $actividadObj->getAll();

        $data = [
            "registroIngreso" => $registroIngreso,
            "usuarios" => $usuarios,
            "actividades" => $actividades,
        ];
        $this->render('registroIngreso/editRegistroIngreso.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtFechaIn']) && isset($_POST['fkIdUserGym'])) {
            $id = $_POST['txtId'] ?? null;
            $fechaIn = $_POST['txtFechaIn'] ?? null;
            $fechaOut = $_POST['txtFechaOut'] ?? null;
            $fkIdUserGym = $_POST['fkIdUserGym'] ?? null;
            $fkIdActividad = $_POST['fkIdActividad'] ?? null;
            $fkIdTrainer = $_POST['fkIdTrainer'] ?? null;

            $registroIngresoObj = new RegistroIngresoModel();
            $registroIngresoObj->editRegistroIngreso($id, $fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer);
            $this->redirectTo("registroIngreso/view");
        }
    }

    public function delete($id)
    {
        $registroIngresoObj = new RegistroIngresoModel();
        $registroIngreso = $registroIngresoObj->getRegistroIngreso($id);
        $data = ["registroIngreso" => $registroIngreso];
        $this->render('registroIngreso/deleteRegistroIngreso.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $registroIngresoObj = new RegistroIngresoModel();
            $registroIngresoObj->removeRegistroIngreso($id);
            $this->redirectTo("registroIngreso/view");
        }
    }
}