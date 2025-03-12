<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Tipo de Usuario</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Tipo de Usuario</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($tipoUsuario && is_object($tipoUsuario)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $tipoUsuario->id</span>
                            <span>Nombre: $tipoUsuario->nombre</span>
                        </div>
                    ";      
                }
            ?>
            </div>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>