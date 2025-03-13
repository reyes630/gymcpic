
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/registroIngreso/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
                <form action="/registroIngreso/create" method="post">
                    <div class="form-group">
                        <label for="">Fecha de Ingreso:</label>
                        <input type="datetime-local" name="txtFechaIn" id="txtFechaIn" class="form-control" required>
                        
                        <label for="">Fecha de Salida:</label>
                        <input type="datetime-local" name="txtFechaOut" id="txtFechaOut" class="form-control">
                        
                        <label for="">Usuario:</label>
                        <select name="fkIdUserGym" id="fkIdUser Gym" class="form-control" required>
                            <option value="">Seleccione un Usuario</option>
                            <?php
                                foreach ($usuarios as $usuario) {
                                    echo "<option value='$usuario->id'>$usuario->nombre</option>";
                                }
                            ?>
                        </select>
                        
                        <label for="">Actividad:</label>
                        <select name="fkIdActividad" id="fkIdActividad" class="form-control">
                            <option value="">Seleccione una Actividad</option>
                            <?php
                                foreach ($actividades as $actividad) {
                                    echo "<option value='$actividad->id'>$actividad->nombre</option>";
                                }
                            ?>
                        </select>
                        
                        <label for="">Entrenador:</label>
                        <select name="fkIdTrainer" id="fkIdTrainer" class="form-control" required>
                            <option value="">Seleccione un Entrenador</option>
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
   