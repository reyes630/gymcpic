
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
    