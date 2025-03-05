<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class ProgramaFormacionModel extends BaseModel
{
    public function __construct(
        ?int $id = null,
        ?string $codigo = null,
        ?string $nombre = null,
        ?int $fkidcentroformacion = null
    ) {
        $this->table = "programaformacion"; // Nombre de la tabla en la base de datos
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveProgramaFormacion($codigo, $nombre, $fkidcentroformacion)
    {
        try {
            $sql = "INSERT INTO $this->table (codigo, nombre, fkidcentroformacion) VALUES (:codigo, :nombre, :fkidcentroformacion)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // 2. BindParam para anitizar los datos de entrada
            $statement->bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':fkidcentroformacion', $fkidcentroformacion, PDO::PARAM_INT);
            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar el programa de formación>" . $ex->getMessage();
        }
    }
    public function getProgramaFormacion($id)
{
    try {
        $sql = "SELECT programaFormacion. *, centroFormacion.nombre as nombreCentro 
                FROM programaFormacion
                INNER JOIN centroformacion
                ON programaFormacion.FkIdCentroFormacion = centroFormacion.id
                WHERE programaFormacion.id=:id";
        $statement = $this->dbConnection->prepare($sql);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $ex) {
        echo "Error al obtener el programa de formación>" . $ex->getMessage();
    }
}

    public function editProgramaFormacion($id, $codigo, $nombre, $fkidcentroformacion)
    {
        try {
            $sql = "UPDATE $this->table SET codigo=:codigo, nombre=:nombre, FkIdCentroFormacion=:fkidcentroformacion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":codigo", $codigo, PDO::PARAM_STR);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":fkidcentroformacion", $fkidcentroformacion, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el programa de formación>" . $ex->getMessage();
        }
    }

    public function deletePrograma($id)
    {
        try {
            // Consulta para eliminar el registro con el id especificado
            $sql = "DELETE FROM $this->table WHERE id = :id";

            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            return $statement->execute();
            
        } catch (PDOException $ex) {
            echo "Error al eliminar el Programa: " . $ex->getMessage();
        }
    }
}