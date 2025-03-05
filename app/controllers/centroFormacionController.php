<?php

namespace App\Controllers;

use App\Models\CentroFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/CentroFormacionModel.php';

class CentroFormacionController extends BaseController{
    public function view(){
        // Llamamos al modelo de CentroFormacion
        $centroFormacionObj = new CentroFormacionModel();
        $centroFormacion = $centroFormacionObj->getAll();
        // Llamamos a la vista
        $this->render('centroFormacion/viewCentroFormacion.php', ["centroFormacion" => $centroFormacion]);
    }
    public function newCentroFormacion()
    {
        $this->render('centroFormacion/newCentroFormacion.php');
    }

    public function createCentroFormacion()
    {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            //Creamos instancia del modelo rol
            $centroFormacionObj = new CentroFormacionModel();
            //Se llama al metodo que guarda en la base de datos
            $res = $centroFormacionObj->saveCentroFormacion($nombre);
            $this->redirectTo("centroFormacion/view");
        }
    }
    public function viewCentroFormacion($id)
{
    $centroFormacionObj = new CentroFormacionModel();
    $centroInfo = $centroFormacionObj->getCentroFormacion($id);
    $data = [
        "centro" => $centroInfo,
    ];
    $this->render('centroFormacion/viewOneCentroFormacion.php', $data);
}

    public function editCentroFormacion($id)
    {
        $centroFormacionObj = new CentroFormacionModel();
        $centroInfo = $centroFormacionObj->getCentroFormacion($id);
        $data = [
            "centro" => $centroInfo
        ];
        $this->render('centroFormacion/editCentroFormacion.php', $data);
    }

    public function updateCentroFormacion()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;

            $centroFormacionObj = new CentroFormacionModel();
            $res = $centroFormacionObj->editCentroFormacion($id, $nombre);
            $this->redirectTo("centroFormacion/view");
        }
    }

    public function deleteCentro($id)
    {
        $rolObj = new CentroFormacionModel();
        $rolObj->deleteCentro($id);
        $this->redirectTo("centroFormacion/view");

    }
    
}
