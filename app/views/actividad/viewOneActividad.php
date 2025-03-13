
        <div class="data-container">
            <?php
                if($actividad && is_object($actividad)){
                    echo "
                        <div class='record'>
                            <span>ID: $actividad->id - Nombre: $actividad->nombre - Descripción: $actividad->descripcion</span>
                        </div>
                    ";      
                }
            ?>
        </div>
 