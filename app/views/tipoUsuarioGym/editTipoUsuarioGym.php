
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/tipoUsuarioGym/view"><img src="images/back.png"> Volver</a>
                </div>
            </div>
            <div class="info">
                <form action="/tipoUsuarioGym/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Tipo de Usuario:</label>
                        <input type="text" readonly value="<?php echo $tipoUsuario->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre del Tipo de Usuario:</label>
                        <input type="text" value="<?php echo $tipoUsuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>
  