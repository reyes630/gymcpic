<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Programa de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
    <h1>GymCPIC - Software Gestión Gimnasio CPIC</h1>

    </header>
    <div class="container">
        <div class="data-container">
            <form action="/programaFormacion/create" method="post">
                <div class="form-group">
                    <label for="">Código del Programa:</label>
                    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" required>
                    
                    <label for="">Nombre del Programa:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    
                    <label for="">Centro de Formación:</label>
                    <select name="fkidcentroformacion" id="fkidcentroformacion" class="form-control" required>
                        <option value="">Seleccione un Centro de Formación</option>
                        <?php
                        
                        foreach ($centrosFormacion as $centro) {
                            echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                        }
                        ?>
                
                    </select>
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