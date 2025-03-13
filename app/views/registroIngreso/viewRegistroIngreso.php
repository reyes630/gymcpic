
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/registroIngreso/view"><img src="images/back.png"></a>
                </div>
                <div class="create">
                    <a href="/registroIngreso/new"><button>+</button></a>
                </div>
            </div>
            <div class="info">
            <?php
            if (empty($registrosIngreso)) {
                echo '<br>No se encuentran registros de ingreso en la base de datos';
            } else {
                foreach ($registrosIngreso as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Usuario: $value->fkIdUserGym</span>
                        <div class='buttons'>
                            <a href='/registroIngreso/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/registroIngreso/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/registroIngreso/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
            ?>
            </div>
        </div>
    