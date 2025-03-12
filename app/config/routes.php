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

        // -------------------- ROL --------------------
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
        "/rol/remove" => [
            "controller" => "App\Controllers\RolController",
            "action" => "remove"
        ],

        // -------------------- ACTIVIDAD --------------------
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
        "/actividad/delete/(\d+)" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "deleteActividad"
        ],
        "/actividad/remove" => [
            "controller" => "App\Controllers\ActividadController",
            "action" => "remove"
        ],

         // -------------------- CENTRO FORMACION --------------------
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
            "action" => "deleteCentroFormacion"
        ],
        "/centroFormacion/remove" => [
            "controller" => "App\Controllers\CentroFormacionController",
            "action" => "remove"
        ],

        // -------------------- PROGRAMA FORMACION --------------------
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

        //// --------------------TIPO USUARIO--------------------
        "/tipoUsuarioGym/view" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "view"
        ],
        "/tipoUsuarioGym/new" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "new"
        ],
        "/tipoUsuarioGym/create" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "create"
        ],
        "/tipoUsuarioGym/view/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "viewOne"
        ],
        "/tipoUsuarioGym/edit/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "edit"
        ],
        "/tipoUsuarioGym/update" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "update"
        ],
        "/tipoUsuarioGym/delete/(\d+)" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "delete"
        ],
        "/tipoUsuarioGym/remove" => [
            "controller" => "App\Controllers\TipoUsuarioGymController",
            "action" => "remove"
        ],

        // -------------------- GRUPO --------------------
        "/grupo/view" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "view"
        ],
        "/grupo/new" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "new"
        ],
        "/grupo/create" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "create"
        ],
        "/grupo/view/(\d+)" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "viewGrupo"
        ],
        "/grupo/edit/(\d+)" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "edit"
        ],
        "/grupo/update" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "update"
        ],
        "/grupo/delete/(\d+)" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "delete"
        ],
        "/grupo/remove" => [
            "controller" => "App\Controllers\GrupoController",
            "action" => "remove"
        ],

       // -------------------- USUARIO --------------------
        "/usuario/view" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "view"
        ],
        "/usuario/new" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "new"
        ],
        "/usuario/create" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "create"
        ],
        "/usuario/edit/(\d+)" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "edit"
        ],
        "/usuario/update" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "update"
        ],
        "/usuario/delete/(\d+)" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "delete"
        ],
        "/usuario/remove" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "remove"
        ],
        "/usuario/view/(\d+)" => [
            "controller" => "App\Controllers\UsuarioController",
            "action" => "viewOne"
        ],

        // -------------------- CONTROL PROGRESO --------------------
        "/controlProgreso/view" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "view"
        ],
        "/controlProgreso/new" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "new"
        ],
        "/controlProgreso/create" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "create"
        ],
        "/controlProgreso/edit/(\d+)" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "edit"
        ],
        "/controlProgreso/update" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "update"
        ],
        "/controlProgreso/delete/(\d+)" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "delete"
        ],
        "/controlProgreso/remove" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "remove"
        ],
        "/controlProgreso/view/(\d+)" => [
            "controller" => "App\Controllers\ControlProgresoController",
            "action" => "viewOne"
        ],

        // -------------------- REGISTRO INGRESO --------------------
        "/registroIngreso/view" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "view"
        ],
        "/registroIngreso/new" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "new"
        ],
        "/registroIngreso/create" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "create"
        ],
        "/registroIngreso/view/(\d+)" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "viewOne"
        ],
        "/registroIngreso/edit/(\d+)" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "edit"
        ],
        "/registroIngreso/update" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "update"
        ],
        "/registroIngreso/delete/(\d+)" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "delete"
        ],
        "/registroIngreso/remove" => [
            "controller" => "App\Controllers\RegistroIngresoController",
            "action" => "remove"
        ],

        // -------------------- LOGIN --------------------
        "/login/init" => [
            "controller" => "App\Controllers\loginController",
            "action" => "initLogin"
        ],

    ];
?>