<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de las Actividades</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <a href="/actividad/new"><button class="add-button">+</button></a>
            <?php
            if (empty($actividades)) {
                echo '<br>No se encuentran actividades en la base de datos';
            } else {
                foreach ($actividades as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/actividad/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/actividad/edit/$value->id'> <button>Editar</button> </a> 
                            <button>Eliminar</button>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <p>&copyDesarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>