<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de la Actividad</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista de la Actividad</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if($actividad && is_object($actividad)){
                    echo "
                        <div class='record'>
                            <span>ID: $actividad->id - Nombre: $actividad->nombre - Descripción: $actividad->descripcion</span>
                        </div>
                    ";      
                }
            ?>
        </div>
    </div>
    <footer>
        <p>&copy Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>