<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class RegistroIngresoModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "registroingreso"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveRegistroIngreso($fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer)
    {
        try {
            $sql = "INSERT INTO $this->table (fechaIn, fechaOut, fkIdUserGym, fkIdActividad, fkIdTrainer) 
                    VALUES (:fechaIn, :fechaOut, :fkIdUserGym, :fkIdActividad, :fkIdTrainer)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fechaIn', $fechaIn);
            $statement->bindParam(':fechaOut', $fechaOut);
            $statement->bindParam(':fkIdUserGym', $fkIdUserGym, PDO::PARAM_INT);
            $statement->bindParam(':fkIdActividad', $fkIdActividad, PDO::PARAM_INT);
            $statement->bindParam(':fkIdTrainer', $fkIdTrainer, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el registro de ingreso>" . $ex->getMessage();
        }
    }

    public function getRegistroIngreso($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el registro de ingreso>" . $ex->getMessage();
        }
    }

    public function editRegistroIngreso($id, $fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer)
    {
        try {
            $sql = "UPDATE $this->table SET fechaIn=:fechaIn, fechaOut=:fechaOut, fkIdUserGym=:fkIdUserGym, 
                    fkIdActividad=:fkIdActividad, fkIdTrainer=:fkIdTrainer WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fechaIn', $fechaIn);
            $statement->bindParam(':fechaOut', $fechaOut);
            $statement->bindParam(':fkIdUserGym', $fkIdUserGym, PDO::PARAM_INT);
            $statement->bindParam(':fkIdActividad', $fkIdActividad, PDO::PARAM_INT);
            $statement->bindParam(':fkIdTrainer', $fkIdTrainer, PDO::PARAM_INT);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el registro de ingreso>" . $ex->getMessage();
        }
    }

    public function removeRegistroIngreso($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el registro de ingreso: " . $ex->getMessage();
            return false;
        }
    }
}