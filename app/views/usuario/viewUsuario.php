
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/usuario/view"><img src="images/back.png"></a>
                </div>
                <div class="create">
                    <a href="/usuario/new"><button>+</button></a>
                </div>
            </div>
            <div class="info">
            <?php
            if (empty($usuarios)) {
                echo '<br>No se encuentran usuarios en la base de datos';
            } else {
                foreach ($usuarios as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/usuario/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/usuario/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/usuario/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
            ?>
            </div>
        </div>
   