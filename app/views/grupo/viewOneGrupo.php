<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Grupo</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Grupo</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/grupo/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($grupo && is_object($grupo)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $grupo->id</span>
                            <span>Ficha: $grupo->ficha</span>
                            <span>Cantidad de Aprendices: $grupo->cantAprendices</span>
                            <span>Estado: $grupo->estado</span>
                            <span>Fecha Inicio: $grupo->fechaIniLectiva</span>
                            <span>Fecha Fin: $grupo->fechaFinLectiva</span>
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