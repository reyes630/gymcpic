<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un nuevo Control de Progreso</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Agregar Control de Progreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/controlProgreso/create" method="post">
                    <div class="form-group">
                        <label for="">Fecha de Realización:</label>
                        <input type="date" name="txtFechaRealizacion" id="txtFechaRealizacion" class="form-control" required>
                        
                        <label for="">Peso:</label>
                        <input type="number" name="txtPeso" id="txtPeso" class="form-control">
                        
                        <label for="">Cintura:</label>
                        <input type="number" name="txtCintura" id="txtCintura" class="form-control">
                        
                        <label for="">Cadera:</label>
                        <input type="number" name="txtCadera" id="txtCadera" class="form-control">
                        
                        <label for="">Muslo Derecho:</label>
                        <input type="number" name="txtMusloDerecho" id="txtMusloDerecho" class="form-control">
                        
                        <label for="">Muslo Izquierdo:</label>
                        <input type="number" name="txtMusloIzquierdo" id="txtMusloIzquierdo" class="form-control">
                        
                        <label for="">Brazo Derecho:</label>
                        <input type="number" name="txtBrazoDerecho" id="txtBrazoDerecho" class="form-control">
                        
                        <label for="">Brazo Izquierdo:</label>
                        <input type="number" name="txtBrazoIzquierdo" id="txtBrazoIzquierdo" class="form-control">
                        
                        <label for="">Antebrazo Derecho:</label>
                        <input type="number" name="txtAntebrazoDerecho" id="txtAntebrazoDerecho" class="form-control">
                        
                        <label for="">Antebrazo Izquierdo:</label>
                        <input type="number" name="txtAntebrazoIzquierdo" id="txtAntebrazoIzquierdo" class="form-control">
                        
                        <label for="">Pantorrilla Derecha:</label>
                        <input type="number" name="txtPantorrillaDerecha" id="txtPantorrillaDerecha" class="form-control">
                        
                        <label for="">Pantorrilla Izquierda:</label>
                        <input type="number" name="txtPantorrillaIzquierda" id="txtPantorrillaIzquierda" class="form-control">
                        
                        <label for="">Examen Médico:</label>
                        <input type="text" name="txtExamenMedico" id="txtExamenMedico" class="form-control">
                        
                        <label for="">Observaciones:</label>
                        <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"></textarea>
                        
                        <label for="">Fecha de Examen:</label>
                        <input type="date" name="txtFechaExamen" id="txtFechaExamen" class="form-control">
                        
                        <label for="">Usuario:</label>
                        <select name="fkIdUsuario" id="fkIdUsuario" class="form-control" required>
                            <option value="">Seleccione un Usuario</option>
                            <?php
                                foreach ($usuarios as $usuario) {
                                    echo "<option value='$usuario->id'>$usuario->nombre</option>";
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