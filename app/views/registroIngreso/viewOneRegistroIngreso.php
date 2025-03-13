
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/registroIngreso/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($registroIngreso && is_object($registroIngreso)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $registroIngreso->id</span>
                            <span>Fecha de Ingreso: $registroIngreso->fechaIn</span>
                            <span>Fecha de Salida: $registroIngreso->fechaOut</span>
                            <span>Usuario: $registroIngreso->fkIdUserGym</span>
                            <span>Actividad: $registroIngreso->fkIdActividad</span>
                            <span>Entrenador: $registroIngreso->fkIdTrainer</span>
                        </div>
                    ";      
                }
            ?>
            </div>
        </div>
   