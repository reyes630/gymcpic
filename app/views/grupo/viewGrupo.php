
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/grupo/view"><img src="images/back.png"></a>
                </div>
                <div class="create">
                    <a href="/grupo/new"><button>+</button></a>
                </div>
            </div>
            <div class="info">
            <?php
            if (empty($grupos)) {
                echo '<br>No se encuentran grupos en la base de datos';
            } else {
                foreach ($grupos as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - Ficha: $value->ficha</span>
                        <div class='buttons'>
                            <a href='/grupo/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/grupo/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/grupo/delete/$value->id'> <button>Eliminar</button> </a> 
                        </div>
                    </div>";
                }
            }
            ?>
            </div>
        </div>
    