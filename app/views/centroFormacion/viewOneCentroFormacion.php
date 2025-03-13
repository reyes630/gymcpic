
        <div class="data-container">
            <?php
                if($centro && is_object($centro)){
                    echo "
                        <div class='record'>
                            <span>ID: $centro->id - Nombre: $centro->nombre</span>
                        </div>
                    ";      
                }
            ?>
        </div>
    