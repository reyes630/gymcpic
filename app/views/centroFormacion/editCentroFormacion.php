<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Centro de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Editar Centro de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/centroFormacion/update" method="post">
                <div class="form-group">
                    <label for="">ID del Centro:</label>
                    <input type="text" readonly value="<?php echo $centro->id ?>" name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nombre del Centro:</label>
                    <input type="text" value="<?php echo $centro->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>