<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ControlProgresoModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "controlprogreso"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveControlProgreso($fechaRealizacion, $peso, $cintura, $cadera, $musloDerecho, $musloIzquierdo, 
        $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, $antebrazoIzquierdo, $pantorrillaDerecha, 
        $pantorrillaIzquierda, $examenMedico, $observaciones, $fechaExamen, $fkIdUsuario)
    {
        try {
            $sql = "INSERT INTO $this->table (fechaRealizacion, peso, cintura, cadera, musloDerecho, musloIzquierdo, 
                    brazoDerecho, brazoIzquierdo, antebrazoDerecho, antebrazoIzquierdo, pantorrillaDerecha, 
                    pantorrillaIzquierda, examenMedico, observaciones, fechaExamen, fkIdUsuario) 
                    VALUES (:fechaRealizacion, :peso, :cintura, :cadera, :musloDerecho, :musloIzquierdo, 
                    :brazoDerecho, :brazoIzquierdo, :antebrazoDerecho, :antebrazoIzquierdo, :pantorrillaDerecha, 
                    :pantorrillaIzquierda, :examenMedico, :observaciones, :fechaExamen, :fkIdUsuario)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fechaRealizacion', $fechaRealizacion);
            $statement->bindParam(':peso', $peso);
            $statement->bindParam(':cintura', $cintura);
            $statement->bindParam(':cadera', $cadera);
            $statement->bindParam(':musloDerecho', $musloDerecho);
            $statement->bindParam(':musloIzquierdo', $musloIzquierdo);
            $statement->bindParam(':brazoDerecho', $brazoDerecho);
            $statement->bindParam(':brazoIzquierdo', $brazoIzquierdo);
            $statement->bindParam(':antebrazoDerecho', $antebrazoDerecho);
            $statement->bindParam(':antebrazoIzquierdo', $antebrazoIzquierdo);
            $statement->bindParam(':pantorrillaDerecha', $pantorrillaDerecha);
            $statement->bindParam(':pantorrillaIzquierda', $pantorrillaIzquierda);
            $statement->bindParam(':examenMedico', $examenMedico);
            $statement->bindParam(':observaciones', $observaciones);
            $statement->bindParam(':fechaExamen', $fechaExamen);
            $statement->bindParam(':fkIdUsuario', $fkIdUsuario);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el control de progreso>" . $ex->getMessage();
        }
    }

    public function getControlProgreso($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el control de progreso>" . $ex->getMessage();
        }
    }

    public function editControlProgreso($id, $fechaRealizacion, $peso, $cintura, $cadera, $musloDerecho, 
        $musloIzquierdo, $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, $antebrazoIzquierdo, 
        $pantorrillaDerecha, $pantorrillaIzquierda, $examenMedico, $observaciones, $fechaExamen, $fkIdUsuario)
    {
        try {
            $sql = "UPDATE $this->table SET fechaRealizacion=:fechaRealizacion, peso=:peso, cintura=:cintura, 
                    cadera=:cadera, musloDerecho=:musloDerecho, musloIzquierdo=:musloIzquierdo, 
                    brazoDerecho=:brazoDerecho, brazoIzquierdo=:brazoIzquierdo, antebrazoDerecho=:antebrazoDerecho, 
                    antebrazoIzquierdo=:antebrazoIzquierdo, pantorrillaDerecha=:pantorrillaDerecha, 
                    pantorrillaIzquierda=:pantorrillaIzquierda, examenMedico=:examenMedico, 
                    observaciones=:observaciones, fechaExamen=:fechaExamen, fkIdUsuario=:fkIdUsuario 
                    WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':fechaRealizacion', $fechaRealizacion);
            $statement->bindParam(':peso', $peso);
            $statement->bindParam(':cintura', $cintura);
            $statement->bindParam(':cadera', $cadera);
            $statement->bindParam(':musloDerecho', $musloDerecho);
            $statement->bindParam(':musloIzquierdo', $musloIzquierdo);
            $statement->bindParam(':brazoDerecho', $brazoDerecho);
            $statement->bindParam(':brazoIzquierdo', $brazoIzquierdo);
            $statement->bindParam(':antebrazoDerecho', $antebrazoDerecho);
            $statement->bindParam(':antebrazoIzquierdo', $antebrazoIzquierdo);
            $statement->bindParam(':pantorrillaDerecha', $pantorrillaDerecha);
            $statement->bindParam(':pantorrillaIzquierda', $pantorrillaIzquierda);
            $statement->bindParam(':examenMedico', $examenMedico);
            $statement->bindParam(':observaciones', $observaciones);
            $statement->bindParam(':fechaExamen', $fechaExamen);
            $statement->bindParam(':fkIdUsuario', $fkIdUsuario);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el control de progreso>" . $ex->getMessage();
        }
    }

    public function removeControlProgreso($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el control de progreso: " . $ex->getMessage();
            return false;
        }
    }
}