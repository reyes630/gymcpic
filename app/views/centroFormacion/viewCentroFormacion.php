<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de los Centros de Formación</title>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <a href="/centroFormacion/new"><button class="add-button">+</button></a>
            <?php
            if (empty($centroFormacion)) {
                echo '<br>No se encuentran centros de formación en la base de datos';
            } else {
                foreach ($centroFormacion as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/centroFormacion/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/centroFormacion/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/centroFormacion/delete/$value->id'> <button>Eliminar</button> </a>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <p>&copy Desarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>