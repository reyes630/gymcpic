
        <div class="data-container">
            <a href="/rol/new"><button class="add-button">+</button></a>
            <?php
            if (empty($roles)) {
                echo '<br>No se encuentran roles en la base de datos';
            } else {
                foreach ($roles as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/rol/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/rol/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/rol/delete/$value->id'> <button>Eliminar</button> </a>
                            </div>
                    </div>";
                }
            }
            ?>
        </div>

       