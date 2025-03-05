<?php

namespace App\Controllers;

class BaseController
{
    public function render(string $view, array $arrayData = null)
    {
        if (isset($arrayData) && is_array($arrayData)) {

            foreach ($arrayData as $key => $value) {
                //Se extraen todos los datos que llegan en arrayData
                //Se crean vbles de acuerdo a las keys
                $$key = $value;
            }
        }
        include_once MAIN_APP_ROUTE . '../views/' . $view; //rol/viewRol.php
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
