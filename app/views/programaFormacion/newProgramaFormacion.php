
        <div class="data-container">
            <form action="/programaFormacion/create" method="post">
                <div class="form-group">
                    <label for="">Código del Programa:</label>
                    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" required>
                    
                    <label for="">Nombre del Programa:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    
                    <label for="">Centro de Formación:</label>
                    <select name="fkidcentroformacion" id="fkidcentroformacion" class="form-control" required>
                        <option value="">Seleccione un Centro de Formación</option>
                        <?php
                        
                        foreach ($centrosFormacion as $centro) {
                            echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                        }
                        ?>
                
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    