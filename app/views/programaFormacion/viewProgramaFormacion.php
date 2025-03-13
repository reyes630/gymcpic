
        <div class="data-container">
            <a href="/programaFormacion/new"><button class="add-button">+</button></a>
            <?php
            if (empty($programas)) {
                echo '<br>No se encuentran programas de formación en la base de datos';
            } else {
                foreach ($programas as $key => $value) {
                    if(isset($_SESSION['rol']) && $_SESSION['rol']==2):
                        $html .= "<a href='/programaFormacion/edit/$value->id'> <button>Editar</button> </a> 
                            <a href='/programaFormacion/delete/$value->id'> <button>Eliminar</button> </a>";
                    endif;
                    echo
                    "<div class='record'>
                        <span> ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/programaFormacion/view/$value->id'> <button>Consultar</button> </a> 
                            
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
   
