<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ActividadModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $nombre = null
    ) {
        $this->table = "actividad"; // Nombre de la tabla en la base de datos
        // Se llama al constructor del padre
        parent::__construct();
    }
    public function saveActividad($nom,$desc)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre,descripcion) VALUES (:nombre,:descripcion)";
            // 1.Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            $nombre = $this->nombre ?? '';
            $descripcion = $this->descripcion ?? '';
            //2. BindParam para anitizar los datos de entrada
            $statement->bindParam(':nombre', $nom, PDO::PARAM_STR);
            $statement->bindParam(':descripcion', $desc, PDO::PARAM_STR);
            //3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar la actividad>" . $ex->getMessage();
        }
    }
    public function getActividad($id)
{
    try {
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $statement = $this->dbConnection->prepare($sql);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo "Error al obtener la actividad>" . $ex->getMessage();
    }
}

    public function editActividad($id, $nombre, $descripcion)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la actividad>" . $ex->getMessage();
        }
    }
}
