
        <div class="data-container">
            <form action="/actividad/update" method="post">
                <div class="form-group">
                    <label for="">ID de la Actividad:</label>
                    <input type="text" readonly value="<?php echo $actividad->id ?>" name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nombre de la Actividad:</label>
                    <input type="text" value="<?php echo $actividad->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Descripción de la Actividad:</label>
                    <input type="text" value="<?php echo $actividad->descripcion ?>" name="txtDescripcion" id="txtDescripcion" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    