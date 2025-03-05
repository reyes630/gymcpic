<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Programa de Formación</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Editar Programa de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/programaFormacion/update" method="post">
                <div class="form-group">
                    <label for="">ID del Programa:</label>
                    <input type="text" readonly value="<?php echo $programa->id ?>" name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Código del Programa:</label>
                    <input type="text" value="<?php echo $programa->codigo ?>" name="txtCodigo" id="txtCodigo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nombre del Programa:</label>
                    <input type="text" value="<?php echo $programa->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Centro de Formación:</label>
                    <select name="fkidcentroformacion" id="fkidcentroformacion" class="form-control" required>
                        
                        <?php
                            if ($centrosFormacion && is_array($centrosFormacion)) {
                                foreach ($centrosFormacion as $item) {  
                                    if ($programa->FkIdCentroFormacion == $item->id) {
                                        echo "<option selected value= '$item->id'>$item->nombre</option>";
                                       
                                    }else {
                                        echo "<option value= '$item->id'>$item->nombre</option>";
                                    }
                                }
                            }
                        
                        
                        ?>
                
                    </select>
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