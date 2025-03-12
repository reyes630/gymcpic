<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de los Controles de Progreso</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Vista de los Controles de Progreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
                </div>
                <div class="create">
                    <a href="/controlProgreso/new"><button>+</button></a>
                </div>
            </div>
            <div class="info">
            <?php
            if (empty($controlesProgreso)) {
                echo '<br>No se encuentran controles de progreso en la base de datos';
            } else {
                foreach ($controlesProgreso as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Usuario: $value->fkIdUsuario</span>
                        <div class='buttons'>
                            <a href='/controlProgreso/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/controlProgreso/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/controlProgreso/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
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