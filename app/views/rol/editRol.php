
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
