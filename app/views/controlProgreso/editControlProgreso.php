<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Control de Progreso</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Editar Control de Progreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/controlProgreso/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Control:</label>
                        <input type="text" readonly value="<?php echo $controlProgreso->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de Realización:</label>
                        <input type="date" value="<?php echo $controlProgreso->fechaRealizacion ?>" name="txtFechaRealizacion" id="txtFechaRealizacion" class="form-control" required>
                        
                        <label for="">Peso:</label>
                        <input type="number" value="<?php echo $controlProgreso->peso ?>" name="txtPeso" id="txtPeso" class="form-control">
                        
                        <label for="">Cintura:</label>
                        <input type="number" value="<?php echo $controlProgreso->cintura ?>" name="txtCintura" id="txtCintura" class="form-control">
                        
                        <label for="">Cadera:</label>
                        <input type="number" value="<?php echo $controlProgreso->cadera ?>" name="txtCadera" id="txtCadera" class="form-control">
                        
                        <label for="">Muslo Derecho:</label>
                        <input type="number" value="<?php echo $controlProgreso->musloDerecho ?>" name="txtMusloDerecho" id="txtMusloDerecho" class="form-control">
                        
                        <label for="">Muslo Izquierdo:</label>
                        <input type="number" value="<?php echo $controlProgreso->musloIzquierdo ?>" name="txtMusloIzquierdo" id="txtMusloIzquierdo" class="form-control">
                        
                        <label for="">Brazo Derecho:</label>
                        <input type="number" value="<?php echo $controlProgreso->brazoDerecho ?>" name="txtBrazoDerecho" id="txtBrazoDerecho" class="form-control">
                        
                        <label for="">Brazo Izquierdo:</label>
                        <input type="number" value="<?php echo $controlProgreso->brazoIzquierdo ?>" name="txtBrazoIzquierdo" id="txtBrazoIzquierdo" class="form-control">
                        
                        <label for="">Antebrazo Derecho:</label>
                        <input type="number" value="<?php echo $controlProgreso->antebrazoDerecho ?>" name="txtAntebrazoDerecho" id="txtAntebrazoDerecho" class="form-control">
                        
                        <label for="">Antebrazo Izquierdo:</label>
                        <input type="number" value="<?php echo $controlProgreso->antebrazoIzquierdo ?>" name="txtAntebrazoIzquierdo" id="txtAntebrazoIzquierdo" class="form-control">
                        
                        <label for="">Pantorrilla Derecha:</label>
                        <input type="number" value="<?php echo $controlProgreso->pantorrillaDerecha ?>" name="txtPantorrillaDerecha" id="txtPantorrillaDerecha" class="form-control">
                        
                        <label for="">Pantorrilla Izquierda:</label>
                        <input type="number" value="<?php echo $controlProgreso->pantorrillaIzquierda ?>" name="txtPantorrillaIzquierda" id="txtPantorrillaIzquierda" class="form-control">
                        
                        <label for="">Examen Médico:</label>
                        <input type="text" value="<?php echo $controlProgreso->examenMedico ?>" name="txtExamenMedico" id="txtExamenMedico" class="form-control">
                        
                        <label for="">Observaciones:</label>
                        <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"><?php echo $controlProgreso->observaciones ?></textarea>
                        
                        <label for="">Fecha de Examen:</label>
                        <input type="date" value="<?php echo $controlProgreso->fechaExamen ?>" name="txtFechaExamen" id="txtFechaExamen" class="form-control">
                        
                        <label for="">Usuario:</label>
                        <select name="fkIdUsuario" id="fkIdUsuario" class="form-control" required>
                            <option value="">Seleccione un Usuario</option>
                            <?php
                                // Aquí se debe cargar la lista de usuarios desde la base de datos
                                foreach ($usuarios as $usuario) {
                                    $selected = $controlProgreso->fkIdUsuario == $usuario->id ? 'selected' : '';
                                    echo "<option value='$usuario->id' $selected>$usuario->nombre</option>";
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
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>