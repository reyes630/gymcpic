<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del Control de Progreso</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista del Control de Progreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($controlProgreso && is_object($controlProgreso)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $controlProgreso->id</span>
                            <span>Fecha de Realización: $controlProgreso->fechaRealizacion</span>
                            <span>Peso: $controlProgreso->peso</span>
                            <span>Cintura: $controlProgreso->cintura</span>
                            <span>Cadera: $controlProgreso->cadera</span>
                            <span>Muslo Derecho: $controlProgreso->musloDerecho</span>
                            <span>Muslo Izquierdo: $controlProgreso->musloIzquierdo</span>
                            <span>Usuario: $controlProgreso->fkIdUsuario</span>
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