
        <div class="data-container">
            <a href="/actividad/new"><button class="add-button">+</button></a>
            <?php
            if (empty($actividades)) {
                echo '<br>No se encuentran actividades en la base de datos';
            } else {
                foreach ($actividades as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/actividad/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/actividad/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/actividad/delete/$value->id'> <button>Eliminar</button> </a>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    