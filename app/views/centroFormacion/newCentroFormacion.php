<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un nuevo Centro de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <form action="/centroFormacion/create" method="post">
                <div class="form-group">
                    <label for="">Nombre del Centro de formacion:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <p>&copy Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>