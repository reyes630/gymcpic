<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> nuevo Rol</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
    <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <form action="/rol/update" method="post">
                <div class="form-group">
                    <label for="">Id del Rol:</label>
                    <input type="text" readonly value="<?php echo $rol->id ?>" name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nombre del Rol:</label>
                    <input type="text" value="<?php echo $rol->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Editar</button>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <p>&copy Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>