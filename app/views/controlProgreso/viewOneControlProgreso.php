
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($controlProgreso && is_object($controlProgreso)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $controlProgreso->id</span>
                            <span>Fecha de Realización: $controlProgreso->fechaRealizacion</span>
                            <span>Peso: $controlProgreso->peso</span>
                            <span>Cintura: $controlProgreso->cintura</span>
                            <span>Cadera: $controlProgreso->cadera</span>
                            <span>Muslo Derecho: $controlProgreso->musloDerecho</span>
                            <span>Muslo Izquierdo: $controlProgreso->musloIzquierdo</span>
                            <span>Usuario: $controlProgreso->fkIdUsuario</span>
                        </div>
                    ";      
                }
            ?>
            </div>
        </div>
    