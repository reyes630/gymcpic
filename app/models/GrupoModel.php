<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class GrupoModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $ficha = null,
        ?int $cantAprendices = null,
        ?string $estado = null,
        ?string $fechaIniLectiva = null,
        ?string $fechaFinLectiva = null,
        ?int $fkIdProgForm = null
    ) {
        $this->table = "grupo"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveGrupo($ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm)
    {
        try {
            $sql = "INSERT INTO $this->table (ficha, cantAprendices, estado, fechaIniLectiva, fechaFinLectiva, fkIdProgForm) 
                    VALUES (:ficha, :cantAprendices, :estado, :fechaIniLectiva, :fechaFinLectiva, :fkIdProgForm)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':ficha', $ficha, PDO::PARAM_STR);
            $statement->bindParam(':cantAprendices', $cantAprendices, PDO::PARAM_INT);
            $statement->bindParam(':estado', $estado, PDO::PARAM_STR);
            $statement->bindParam(':fechaIniLectiva', $fechaIniLectiva);
            $statement->bindParam(':fechaFinLectiva', $fechaFinLectiva);
            $statement->bindParam(':fkIdProgForm', $fkIdProgForm, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el grupo>" . $ex->getMessage();
        }
    }

    public function getGrupo($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el grupo>" . $ex->getMessage();
        }
    }

    public function editGrupo($id, $ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm)
    {
        try {
            $sql = "UPDATE $this->table SET ficha=:ficha, cantAprendices=:cantAprendices, estado=:estado, 
                    fechaIniLectiva=:fechaIniLectiva, fechaFinLectiva=:fechaFinLectiva, fkIdProgForm=:fkIdProgForm WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":ficha", $ficha, PDO::PARAM_STR);
            $statement->bindParam(":cantAprendices", $cantAprendices, PDO::PARAM_INT);
            $statement->bindParam(":estado", $estado, PDO::PARAM_STR);
            $statement->bindParam(":fechaIniLectiva", $fechaIniLectiva);
            $statement->bindParam(":fechaFinLectiva", $fechaFinLectiva);
            $statement->bindParam(":fkIdProgForm", $fkIdProgForm, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el grupo>" . $ex->getMessage();
        }
    }

    public function removeGrupo($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el grupo: " . $ex->getMessage();
            return false;
        }
    }
}