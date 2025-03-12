<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>GymCPIC - Editar Usuario</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <div class="navegate-group">
                <div class="back">
                    <a href="/usuario/view"><img src="/img/back.svg"></a>
                </div>
            </div>
            <div class="info">
                <form action="/usuario/update" method="post">
                    <div class="form-group">
                        <label for="">ID del Usuario:</label>
                        <input type="text" readonly value="<?php echo $usuario->id ?>" name="txtId" id="txtId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" value="<?php echo $usuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
                        
                        <label for="">Tipo de Documento:</label>
                        <select name="txtTipoDocumento" id="txtTipoDocumento" class="form-control" required>
                            <option value="">Seleccione un Tipo de Documento</option>
                            <option value="CC" <?php echo $usuario->tipoDocumento == 'CC' ? 'selected' : ''; ?>>Cédula de Ciudadanía (CC)</option>
                            <option value="TI" <?php echo $usuario->tipoDocumento == 'TI' ? 'selected' : ''; ?>>Tarjeta de Identidad (TI)</option>
                        </select>

                        <label for="">Documento:</label>
                        <input type="text" value="<?php echo $usuario->documento ?>" name="txtDocumento" id="txtDocumento" class="form-control" required>
                        
                        <label for="">Fecha de Nacimiento:</label>
                        <input type="date" value="<?php echo $usuario->fechaNacimiento ?>" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
                        
                        <label for="">Email:</label>
                        <input type="email" value="<?php echo $usuario->email ?>" name="txtEmail" id="txtEmail" class="form-control" required>
                        
                        <label for="">Género:</label>
                        <select name="txtGenero" id="txtGenero" class="form-control" required>
                            <option value="">Seleccione un Género</option>
                            <option value="M" <?php echo $usuario->genero == 'M' ? 'selected' : ''; ?>>Masculino (M)</option>
                            <option value="F" <?php echo $usuario->genero == 'F' ? 'selected' : ''; ?>>Femenino (F)</option>
                            <option value="B" <?php echo $usuario->genero == 'B' ? 'selected' : ''; ?>>Binarie (B)</option>
                        </select>
                        
                        <label for="">Estado:</label>
                        <input type="text" value="<?php echo $usuario->estado ?>" name="txtEstado" id="txtEstado" class="form-control" required>
                        
                        <label for="">Teléfono:</label>
                        <input type="text" value="<?php echo $usuario->telefono ?>" name="txtTelefono" id="txtTelefono" class="form-control" required>
                        
                        <label for="">EPS:</label>
                        <input type="text" value="<?php echo $usuario->eps ?>" name="txtEps" id="txtEps" class="form-control">
                        
                        <label for="">Tipo de Sangre:</label>
                        <input type="text" value="<?php echo $usuario->tipoSangre ?>" name="txtTipoSangre" id="txtTipoSangre" class="form-control">
                        
                        <label for="">Peso:</label>
                        <input type="number" value="<?php echo $usuario->peso ?>" name="txtPeso" id="txtPeso" class="form-control">
                        
                        <label for="">Estatura:</label>
                        <input type="number" value="<?php echo $usuario->estatura ?>" name="txtEstatura" id="txtEstatura" class="form-control">
                        
                        <label for="">Teléfono de Emergencia:</label>
                        <input type="text" value="<?php echo $usuario->telefonoEmergencia ?>" name="txtTelefonoEmergencia" id="txtTelefonoEmergencia" class="form-control">
                        
                        <label for="">Contraseña:</label>
                        <input type="password" value="<?php echo $usuario->password ?>" name="txtPassword" id="txtPassword" class="form-control" required>
                        
                        <label for="">Observaciones:</label>
                        <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"><?php echo $usuario->observaciones ?></textarea>
                        
                        <label for="">Rol:</label>
                        <select name="fkIdRol" id="fkIdRol" class="form-control" required>
                            <option value="">Seleccione un Rol</option>
                            <?php foreach ($roles as $rol): ?>
                                <option value="<?php echo $rol->id; ?>" <?php echo $usuario->fkIdRol == $rol->id ? 'selected' : ''; ?>><?php echo $rol->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Grupo:</label>
                        <select name="fkIdGrupo" id="fkIdGrupo" class="form-control">
                            <option value="">Seleccione un Grupo</option>
                            <?php foreach ($grupos as $grupo): ?>
                                <option value="<?php echo $grupo->id; ?>" <?php echo $usuario->fkIdGrupo == $grupo->id ? 'selected' : ''; ?>><?php echo $grupo->ficha; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Centro de Formación:</label>
                        <select name="fkIdCentroFormacion" id="fkIdCentroFormacion" class="form-control">
                            <option value="">Seleccione un Centro de Formación</option>
                            <?php foreach ($centros as $centro): ?>
                                <option value="<?php echo $centro->id; ?>" <?php echo $usuario->fkIdCentroFormacion == $centro->id ? 'selected' : ''; ?>><?php echo $centro->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <label for="">Tipo de Usuario GYM:</label>
                        <select name="fkIdTipoUserGym" id="fkIdTipoUserGym" class="form-control">
                            <option value="">Seleccione un Tipo de Usuario</option>
                            <?php foreach ($tiposUsuario as $tipoUsuario): ?>
                                <option value="<?php echo $tipoUsuario->id; ?>" <?php echo $usuario->fkIdTipoUserGym == $tipoUsuario->id ? 'selected' : ''; ?>><?php echo $tipoUsuario->nombre; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>