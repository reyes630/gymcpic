
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/grupo/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
                <form action="/grupo/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Grupo:</label>
                        <input type="text" readonly value="<?php echo $grupo->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ficha:</label>
                        <input type="text" value="<?php echo $grupo->ficha ?>" name="txtFicha" id="txtFicha" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad de Aprendices:</label>
                        <input type="number" value="<?php echo $grupo->cantAprendices ?>" name="txtCantAprendices" id="txtCantAprendices" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Estado:</label>
                        <input type="text" value="<?php echo $grupo->estado ?>" name="txtEstado" id="txtEstado" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Inicio Lectiva:</label>
                        <input type="date" value="<?php echo $grupo->fechaIniLectiva ?>" name="txtFechaIniLectiva" id="txtFechaIniLectiva" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Fin Lectiva:</label>
                        <input type="date" value="<?php echo $grupo->fechaFinLectiva ?>" name="txtFechaFinLectiva" id="txtFechaFinLectiva" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Programa de Formación:</label>
                        <select name="fkIdProgForm" id="fkIdProgForm" class="form-control" required>
                            <option value="">Seleccione un Programa</option>
                            <?php
                                if (isset($programas) && is_array($programas)) {
                                    foreach ($programas as $programa) {
                                        if($grupo->fkIdProgForm == $programa->id){
                                            echo "<option selected value='$programa->id'>$programa->nombre</option>";
                                        } else {
                                            echo "<option value='$programa->id'>$programa->nombre</option>";
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
    