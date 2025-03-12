<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class TipoUsuarioGymModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $nombre = null
    ) {
        $this->table = "tipoUsuarioGym"; // Nombre de la tabla en la base de datos
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveTipoUsuario($nombre)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el tipo de usuario>" . $ex->getMessage();
        }
    }

    public function getTipoUsuario($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el tipo de usuario>" . $ex->getMessage();
        }
    }

    public function editTipoUsuario($id, $nombre)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el tipo de usuario>" . $ex->getMessage();
        }
    }

    public function removeTipoUsuario($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el tipo de usuario: " . $ex->getMessage();
            return false;
        }
    }
}