<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Programa de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Programa de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            
            <?php
                if($programa && is_object($programa)){
                    echo "
                        <div class='record'>
                            <span>ID: $programa->id - Código: $programa->codigo - Nombre: $programa->nombre - Centro Formacion: $programa->nombreCentro</span>
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