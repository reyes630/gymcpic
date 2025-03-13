
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/registroIngreso/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
                <form action="/registroIngreso/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Registro:</label>
                        <input type="text" readonly value="<?php echo $registroIngreso->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de Ingreso:</label>
                        <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($registroIngreso->fechaIn)) ?>" name="txtFechaIn" id="txtFechaIn" class="form-control" required>
                        
                        <label for="">Fecha de Salida:</label>
                        <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($registroIngreso->fechaOut)) ?>" name="txtFechaOut" id="txtFechaOut" class="form-control">
                        
                        <label for="">Usuario:</label>
                        <select name="fkIdUserGym" id="fkIdUserGym" class="form-control" required>
                            <option value="">Seleccione un Usuario</option>
                            <?php
                                foreach ($usuarios as $usuario) {
                                    $selected = $registroIngreso->fkIdUserGym == $usuario->id ? 'selected' : '';
                                    echo "<option value='$usuario->id' $selected>$usuario->nombre</option>";
                                }
                            ?>
                        </select>
                        
                        <label for="">Actividad:</label>
                        <select name="fkIdActividad" id="fkIdActividad" class="form-control">
                            <option value="">Seleccione una Actividad</option>
                            <?php
                                foreach ($actividades as $actividad) {
                                    $selected = $registroIngreso->fkIdActividad == $actividad->id ? 'selected' : '';
                                    echo "<option value='$actividad->id' $selected>$actividad->nombre</option>";
                                }
                            ?>
                        </select>
                        
                        <label for="">Entrenador:</label>
                        <select name="fkIdTrainer" id="fkIdTrainer" class="form-control" required>
                            <option value="">Seleccione un Entrenador</option>
                            <?php
                                foreach ($usuarios as $usuario) {
                                    $selected = $registroIngreso->fkIdTrainer == $usuario->id ? 'selected' : '';
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
    