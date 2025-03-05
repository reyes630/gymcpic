<?php
namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';


class RolModel extends BaseModel{
    public function __construct(
        ?int $id = null,
        ?string $nombre = null, 
    )
    {
        $this->table = "rol";
        //Se llama al constructor del padre
        parent::__construct();
    } 
    
    public function saveRol($nom){
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            // 1.Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            $nombre = $this->nombre ?? '';
            //2. BindParam para anitizar los datos de entrada
            $statement->bindParam(':nombre',$nom, PDO::PARAM_STR);
            //3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        
        } catch (PDOException $ex) {
            echo "Error al guardar el rol>" .$ex->getMessage();
        }
    }

    public function getRol($id){
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0];
        } catch (PDOException $ex) {
            echo "Error al obtener el rol>".$ex->getMessage();
        }
    }

    public function editRol($id, $nombre){
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el rol";
        }
    }

    public function deleteRol($id)
    {
        try {
            // Consulta para eliminar el registro con el id especificado
            $sql = "DELETE FROM $this->table WHERE id = :id";

            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            return $statement->execute();
            
        } catch (PDOException $ex) {
            echo "Error al eliminar el Rol: " . $ex->getMessage();
        }
    }
}
