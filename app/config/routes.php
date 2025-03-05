<?php
    return [
        "/" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "index"
        ],
    
        "/home" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "index"
        ],
    
        "/hello" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "saludar"
        ],

       //------------------------ ROL ----------------------------------
        "/rol/index" => [
            "controller" => "App\Controllers\RolController",
            "action" => "index"
        ],
        "/rol/view" => [
            "controller" => "App\Controllers\RolController",
            "action" => "view"
        ],
        "/rol/new" => [
            "controller" => "App\Controllers\RolController",
            "action" => "newRol"
        ],
        "/rol/create" => [
            "controller" => "App\Controllers\RolController",
            "action" => "createRol"
        ],
        "/rol/view/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "viewRol"
        ],
        "/rol/edit/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "editRol"
        ],
        "/rol/update" => [
            "controller" => "App\Controllers\RolController",
            "action" => "updateRol"
        ],
        "/rol/delete/(\d+)" => [
            "controller" => "App\Controllers\RolController",
            "action" => "deleteRol"
        ],


         //------------------------ ACTIVIDADES ----------------------------------
        "/actividad/view" => [ 
            "controller" => "App\Controllers\ActividadController",
            "action" => "view"
        ],
        "/actividad/new" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "newActividad"
        ],
        "/actividad/create" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "createActividad"   
        ],
        "/actividad/edit/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "editActividad"
        ],
        "/actividad/view/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "viewActividad"
        ],
        "/actividad/update" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "updateActividad"
        ],

         //------------------------ CENTROS ----------------------------------
        "/centroFormacion/view" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "view"
        ],
        "/centroFormacion/new" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "newCentroFormacion"
        ],
        "/centroFormacion/create" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "createCentroFormacion"   
        ],
        "/centroFormacion/edit/(\d+)" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "editCentroFormacion"
        ],
        "/centroFormacion/view/(\d+)" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "viewCentroFormacion"
        ],
        "/centroFormacion/update" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "updateCentroFormacion"
        ],
        "/centroFormacion/delete/(\d+)" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "deleteCentro"
        ],

         //------------------------ PROGRAMA ----------------------------------
        "/programaFormacion/view" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "view"
        ],
        "/programaFormacion/new" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "newProgramaFormacion"
        ],
        "/programaFormacion/create" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "createProgramaFormacion"
        ],
        "/programaFormacion/edit/(\d+)" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "editProgramaFormacion"
        ],
        "/programaFormacion/view/(\d+)" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "viewProgramaFormacion"
        ],
        "/programaFormacion/update" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "updateProgramaFormacion"
        ],
        "/programaFormacion/delete/(\d+)" => [
            "controller" => "App\Controllers\ProgramaFormacionController",
            "action" => "deletePrograma"
        ],
    ];
?>