<?php

namespace App\Controllers;
//Se inicia la sesión
session_start();

class BaseController
{
    protected string $layout = "main_layout";

    public function __construct()
    {
        //Validar el tiempo de inactividad de un usuario
        //El tiempo no debe superar lo configurado en INSCTIVE_TIME
        if (isset($_SESSION['timeOut'])) {
            #se Calcula tiempo de sesion trancurrido 
            $tiempoSesion = time() - $_SESSION['timeOut'];
            if ($tiempoSesion > INACTIVE_TIME*60) { 
                //Se destruye la sesion por inactividad 
                session_destroy();
                header('Location: / login/login.php');
            }else{
                //Se actualiza el tiempo de sesion 
                $_SESSION['timeoOut'] = time();
            }
        }
    }

    public function render(string $view, array $arrayData = null)
    {
        if (isset($arrayData) && is_array($arrayData)) {

            foreach ($arrayData as $key => $value) {
                //Se extraen todos los datos que llegan en arrayData
                //Se crean vbles de acuerdo a las keys
                $$key = $value;
            }
        }
        $content = MAIN_APP_ROUTE."../views/$view";
        $layout = MAIN_APP_ROUTE."../views/layouts/{$this->layout}.php";
        include_once $layout;
    }
    public function formartNumber()
    {
        echo "<br> Formatea un número";
    }
    public function redirectTo($view)
    {
        header("location:/$view");
    }
}
