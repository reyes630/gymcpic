<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un nuevo Grupo</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Agregar Grupo</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/grupo/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/grupo/create" method="post">
                    <div class="form-group">
                        <label for="">Ficha:</label>
                        <input type="text" name="txtFicha" id="txtFicha" class="form-control" required>
                        
                        <label for="">Cantidad de Aprendices:</label>
                        <input type="number" name="txtCantAprendices" id="txtCantAprendices" class="form-control" required>
                        
                        <label for="">Estado:</label>
                        <input type="text" name="txtEstado" id="txtEstado" class="form-control" required>
                        
                        <label for="">Fecha Inicio Lectiva:</label>
                        <input type="date" name="txtFechaIniLectiva" id="txtFechaIniLectiva" class="form-control">
                        
                        <label for="">Fecha Fin Lectiva:</label>
                        <input type="date" name="txtFechaFinLectiva" id="txtFechaFinLectiva" class="form-control">
                        
                        <label for="">Programa de Formación:</label>
                        <select name="fkIdProgForm" id="fkIdProgForm" class="form-control" required>
                            <option value="">Seleccione un Programa</option>
                            <?php
                                if (isset($programas) && is_array($programas)) {
                                    foreach ($programas as $programa) {
                                        echo "<option value='$programa->id'>$programa->nombre</option>";
                                    }
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
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>