
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/usuario/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
            <?php
                if($usuario && is_object($usuario)){
                    echo "
                        <div class='record-one'>
                            <span>ID: $usuario->id</span>
                            <span>Nombre: $usuario->nombre</span>
                            <span>Tipo de Documento: $usuario->tipoDocumento</span>
                            <span>Documento: $usuario->documento</span>
                            <span>Fecha de Nacimiento: $usuario->fechaNacimiento</span>
                            <span>Email: $usuario->email</span>
                            <span>Género: $usuario->genero</span>
                            <span>Estado: $usuario->estado</span>
                            <span>Teléfono: $usuario->telefono</span>
                            <span>EPS: $usuario->eps</span>
                            <span>Tipo de Sangre: $usuario->tipoSangre</span>
                            <span>Peso: $usuario->peso</span>
                            <span>Estatura: $usuario->estatura</span>
                            <span>Teléfono de Emergencia: $usuario->telefonoEmergencia</span>
                            <span>Observaciones: $usuario->observaciones</span>
                        </div>
                    ";      
                }
            ?>
            </div>
        </div>
   