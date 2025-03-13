
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/controlProgreso/view"><img src="images/back.png"></a>
                </div>
                <div class="create">
                    <a href="/controlProgreso/new"><button>+</button></a>
                </div>
            </div>
            <div class="info">
            <?php
            if (empty($controlesProgreso)) {
                echo '<br>No se encuentran controles de progreso en la base de datos';
            } else {
                foreach ($controlesProgreso as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Usuario: $value->fkIdUsuario</span>
                        <div class='buttons'>
                            <a href='/controlProgreso/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/controlProgreso/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/controlProgreso/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
            ?>
            </div>
        </div>
    