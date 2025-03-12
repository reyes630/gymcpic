<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsuarioModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE . '../models/UsuarioModel.php';



final class loginController extends BaseController
{
    public function __construct()
    {
        $this->layout = "login_layout";
    }

    public function initLogin(){
        if(isset($_POST['txtUser']) && isset($_POST['txtPassword'])){

            $user = trim($_POST['txtUser']) || "";
            $password = trim($_POST['txtUser']) || "";
            if($user  != null && $password != null) {
                //Se valida la existencia del usuario y contraseña en la BD
                $loginObj = new UsuarioModel();
                $resp = $loginObj->validarLogin($user, $password);
                if ($resp) {
                    $this->redirectTo('programaFormacion/view');
                }else{
                    $errors= "El usuario y/o contraseña son incorrectos";
                }
            }else {
                $errors = "El usuario y/o contraseña no pueden ser vacios";
            }
            $data = [
                'errors' => $errors,
            ];
            $this->render('login/login.php', $data);
        }else{
            //Se renderiza el formaulario del login
            $this->render('login/login.php');
        }

    }
}
