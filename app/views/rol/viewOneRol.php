
        <div class="data-container">
            <?php
                if($rol && is_object($rol)){
                    echo "
                        <div class='record'>
                            <span>ID: $rol->id -</span>
                            <span>Nombre: $rol->nombre </span>
                        </div>
                    ";      
                }
            ?>
        </div>
  