<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Centro de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Centro de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if($centro && is_object($centro)){
                    echo "
                        <div class='record'>
                            <span>ID: $centro->id - Nombre: $centro->nombre</span>
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