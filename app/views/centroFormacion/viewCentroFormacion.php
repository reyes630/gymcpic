
        <div class="data-container">
            
            
            <a href="/registroIngreso/view"><img src="images/back.png">volver</a>
            <a href="/centroFormacion/new"><button class="add-button">+</button></a>
            <?php
            if (empty($centroFormacion)) {
                echo '<br>No se encuentran centros de formación en la base de datos';
            } else {
                foreach ($centroFormacion as $key => $value) {
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/centroFormacion/view/$value->id'> <button>Consultar</button> </a> 
                            <a href='/centroFormacion/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/centroFormacion/delete/$value->id'> <button>Eliminar</button> </a>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    