<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un nuevo Tipo de Usuario</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Agregar Tipo de Usuario</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/tipoUsuarioGym/create" method="post">
                    <div class="form-group">
                        <label for="">Nombre del Tipo de Usuario:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>