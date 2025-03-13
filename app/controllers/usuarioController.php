<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\RolModel; // Para obtener los roles
use App\Models\GrupoModel; // Para obtener los grupos
use App\Models\CentroFormacionModel; // Para obtener los centros de formación
use App\Models\TipoUsuarioGymModel; // Para obtener los tipos de usuario

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/UsuarioModel.php';

class UsuarioController extends BaseController
{
    public function __construct()
    {
        #Se define la plantilla para este controlador 
        $this->layout = "admin_layout";
        
        parent::__construct();
    }
    public function view()
    {
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $data = ["usuarios" => $usuarios,
                 "title" => "Usuarios"        
        ];
        $this->render('usuario/viewUsuario.php', $data);
    }

    public function new()
    {
        $rolObj = new RolModel();
        $grupoObj = new GrupoModel();
        $centroObj = new CentroFormacionModel();
        $tipoUsuarioObj = new TipoUsuarioGymModel();

        $roles = $rolObj->getAll();
        $grupos = $grupoObj->getAll();
        $centros = $centroObj->getAll();
        $tiposUsuario = $tipoUsuarioObj->getAll(); 

        $data = [
            "roles" => $roles,
            "grupos" => $grupos,
            "centros" => $centros,
            "tiposUsuario" => $tiposUsuario,
            "title" => "Nuevo Usuario"

        ];
        $this->render('usuario/newUsuario.php', $data);
    }

    public function create()
    {
        if (isset($_POST['txtNombre']) && isset($_POST['txtTipoDocumento']) && isset($_POST['txtDocumento']) && 
            isset($_POST['txtEmail']) && isset($_POST['txtGenero']) && isset($_POST['txtEstado']) && 
            isset($_POST['txtTelefono']) && isset($_POST['txtPassword']) && isset($_POST['fkIdRol'])) {
            
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoDocumento = $_POST['txtTipoDocumento'] ?? null; // Updated
            $documento = $_POST['txtDocumento'] ?? null;
            $fechaNacimiento = $_POST['txtFechaNacimiento'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $genero = $_POST['txtGenero'] ?? null; // Updated
            $estado = $_POST['txtEstado'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $eps = $_POST['txtEps'] ?? null;
            $tipoSangre = $_POST['txtTipoSangre'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $estatura = $_POST['txtEstatura'] ?? null;
            $telefonoEmergencia = $_POST['txtTelefonoEmergencia'] ?? null;
            $password = $_POST['txtPassword'] ?? null;
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fkIdRol = $_POST['fkIdRol'] ?? null;
            $fkIdGrupo = $_POST['fkIdGrupo'] ?? null;
            $fkIdCentroFormacion = $_POST['fkIdCentroFormacion'] ?? null;
            $fkIdTipoUserGym = $_POST['fkIdTipoUserGym'] ?? null;
            
            $usuarioObj = new UsuarioModel();
            $usuarioObj->saveUsuario($nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, $estado, 
                $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $passwordHashed, $observaciones, 
                $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym);
            $this->redirectTo("usuario/view");
        }
    }

    public function edit($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuarioInfo = $usuarioObj->getUsuario($id);

        $rolObj = new RolModel();
        $grupoObj = new GrupoModel();
        $centroObj = new CentroFormacionModel();
        $tipoUsuarioObj = new TipoUsuarioGymModel();

        $roles = $rolObj->getAll();
        $grupos = $grupoObj->getAll();
        $centros = $centroObj->getAll();
        $tiposUsuario = $tipoUsuarioObj->getAll();

        $data = [
            "usuario" => $usuarioInfo,
            "roles" => $roles,
            "grupos" => $grupos,
            "centros" => $centros,
            "tiposUsuario" => $tiposUsuario,
            "title" => "Editar Usuario"
        ];
        $this->render('usuario/editUsuario.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtTipoDocumento']) && 
            isset($_POST['txtDocumento']) && isset($_POST['txtEmail']) && isset($_POST['txtGenero']) && 
            isset($_POST['txtEstado']) && isset($_POST['txtTelefono']) && isset($_POST['fkIdRol'])) {
            
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoDocumento = $_POST['txtTipoDocumento'] ?? null;
            $documento = $_POST['txtDocumento'] ?? null;
            $fechaNacimiento = $_POST['txtFechaNacimiento'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $genero = $_POST['txtGenero'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $eps = $_POST['txtEps'] ?? null;
            $tipoSangre = $_POST['txtTipoSangre'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $estatura = $_POST['txtEstatura'] ?? null;
            $telefonoEmergencia = $_POST['txtTelefonoEmergencia'] ?? null;
            $password = $_POST['txtPassword'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fkIdRol = $_POST['fkIdRol'] ?? null;
            $fkIdGrupo = $_POST['fkIdGrupo'] ?? null;
            $fkIdCentroFormacion = $_POST['fkIdCentroFormacion'] ?? null;
            $fkIdTipoUserGym = $_POST['fkIdTipoUserGym'] ?? null;

            $usuarioObj = new UsuarioModel();
            $usuarioObj->editUsuario($id, $nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, 
                $estado, $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $password, 
                $observaciones, $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym);
            $this->redirectTo("usuario/view");
        }
    }

    public function delete($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuarioInfo = $usuarioObj->getUsuario($id);
        $data = ["usuario" => $usuarioInfo];
        $this->render('usuario/deleteUsuario.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $usuarioObj = new UsuarioModel();
            $usuarioObj->removeUsuario($id);
            $this->redirectTo("usuario/view");
        }
    }

    public function viewOne($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuarioInfo = $usuarioObj->getUsuario($id);
        $data = ["usuario" => $usuarioInfo];
        $this->render('usuario/viewOneUsuario.php', $data);
    }

   
}