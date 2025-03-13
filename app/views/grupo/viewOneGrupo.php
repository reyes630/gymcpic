
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/grupo/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($grupo && is_object($grupo)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $grupo->id</span>
                            <span>Ficha: $grupo->ficha</span>
                            <span>Cantidad de Aprendices: $grupo->cantAprendices</span>
                            <span>Estado: $grupo->estado</span>
                            <span>Fecha Inicio: $grupo->fechaIniLectiva</span>
                            <span>Fecha Fin: $grupo->fechaFinLectiva</span>
                        </div>
                    ";      
                }
            ?>
            </div>
        </div>
    