
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/usuario/view"><img src="images/back.png"></a>
                </div>
            </div>
            <div class="info">
                <form action="/usuario/create" method="post">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                        
                        <label for="">Tipo de Documento:</label>
                        <select name="txtTipoDocumento" id="txtTipoDocumento" class="form-control" required>
                            <option value="">Seleccione un Tipo de Documento</option>
                            <option value="CC">Cédula de Ciudadanía (CC)</option>
                            <option value="TI">Tarjeta de Identidad (TI)</option>
                        </select>
                        
                        <label for="">Documento:</label>
                        <input type="text" name="txtDocumento" id="txtDocumento" class="form-control" required>
                        
                        <label for="">Fecha de Nacimiento:</label>
                        <input type="date" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
                        
                        <label for="">Email:</label>
                        <input type="email" name="txtEmail" id="txtEmail" class="form-control" required>
                        
                        <label for="">Género:</label>
                        <select name="txtGenero" id="txtGenero" class="form-control" required>
                            <option value="">Seleccione un Género</option>
                            <option value="M">Masculino (M)</option>
                            <option value="F">Femenino (F)</option>
                            <option value="B">Binarie (B)</option>
                        </select>
                        
                        <label for="">Estado:</label>
                        <input type="text" name="txtEstado" id="txtEstado" class="form-control" required>
                        
                        <label for="">Teléfono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required>
                        
                        <label for="">EPS:</label>
                        <input type="text" name="txtEps" id="txtEps" class="form-control">
                        
                        <label for="">Tipo de Sangre:</label>
                        <input type="text" name="txtTipoSangre" id="txtTipoSangre" class="form-control">
                        
                        <label for="">Peso:</label>
                        <input type="number" name="txtPeso" id="txtPeso" class="form-control">
                        
                        <label for="">Estatura:</label>
                        <input type="number" name="txtEstatura" id="txtEstatura" class="form-control">
                        
                        <label for="">Teléfono de Emergencia:</label>
                        <input type="text" name="txtTelefonoEmergencia" id="txtTelefonoEmergencia" class="form-control">
                        
                        <label for="">Contraseña:</label>
                        <input type="password" name="txtPassword" id="txtPassword" class="form-control" required>
                        
                        <label for="">Observaciones:</label>
                        <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"></textarea>
                        
                        <label for="">Rol:</label>
                        <select name="fkIdRol" id="fkIdRol" class="form-control" required>
                            <option value="">Seleccione un Rol</option>
                            <?php foreach ($roles as $rol): ?>
                                <option value="<?php echo $rol->id; ?>"><?php echo $rol->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Grupo:</label>
                        <select name="fkIdGrupo" id="fkIdGrupo" class="form-control">
                            <option value="">Seleccione un Grupo</option>
                            <?php foreach ($grupos as $grupo): ?>
                                <option value="<?php echo $grupo->id; ?>"><?php echo $grupo->ficha; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Centro de Formación:</label>
                        <select name="fkIdCentroFormacion" id="fkIdCentroFormacion" class="form-control">
                            <option value="">Seleccione un Centro de Formación</option>
                            <?php foreach ($centros as $centro): ?>
                                <option value="<?php echo $centro->id; ?>"><?php echo $centro->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Tipo de Usuario GYM:</label>
                        <select name="fkIdTipoUserGym" id="fkIdTipoUserGym" class="form-control">
                            <option value="">Seleccione un Tipo de Usuario</option>
                            <?php foreach ($tiposUsuario as $tipoUsuario): ?>
                                <option value="<?php echo $tipoUsuario->id; ?>"><?php echo $tipoUsuario->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
 