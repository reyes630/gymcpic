<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Registro de Ingreso</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Registro de Ingreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/registroIngreso/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($registroIngreso && is_object($registroIngreso)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $registroIngreso->id</span>
                            <span>Fecha de Ingreso: $registroIngreso->fechaIn</span>
                            <span>Fecha de Salida: $registroIngreso->fechaOut</span>
                            <span>Usuario: $registroIngreso->fkIdUserGym</span>
                            <span>Actividad: $registroIngreso->fkIdActividad</span>
                            <span>Entrenador: $registroIngreso->fkIdTrainer</span>
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