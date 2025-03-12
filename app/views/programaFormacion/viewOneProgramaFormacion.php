
        <div class="data-container">
            
            <?php
                if($programa && is_object($programa)){
                    echo "
                        <div class='record'>
                            <span>ID: $programa->id - Código: $programa->codigo - Nombre: $programa->nombre - Centro Formacion: $programa->nombreCentro</span>
                        </div>
                    ";    
                }
            ?>
        </div>
   