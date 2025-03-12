<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class UsuarioModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "usuario"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    

    public function saveUsuario($nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, $estado, 
    $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $password, $observaciones, 
    $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, tipoDocumento, documento, fechaNacimiento, email, genero, estado, 
                    telefono, eps, tipoSangre, peso, estatura, telefonoEmergencia, password, observaciones, 
                    fkIdRol, fkIdGrupo, fkIdCentroFormacion, fkIdTipoUserGym) 
                    VALUES (:nombre, :tipoDocumento, :documento, :fechaNacimiento, :email, :genero, :estado, 
                    :telefono, :eps, :tipoSangre, :peso, :estatura, :telefonoEmergencia, :password, :observaciones, 
                    :fkIdRol, :fkIdGrupo, :fkIdCentroFormacion, :fkIdTipoUserGym)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':tipoDocumento', $tipoDocumento, PDO::PARAM_STR); // Updated
            $statement->bindParam(':documento', $documento, PDO::PARAM_STR);
            $statement->bindParam(':fechaNacimiento', $fechaNacimiento);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':genero', $genero, PDO::PARAM_STR); // Updated
            $statement->bindParam(':estado', $estado, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':eps', $eps, PDO::PARAM_STR);
            $statement->bindParam(':tipoSangre', $tipoSangre, PDO::PARAM_STR);
            $statement->bindParam(':peso', $peso, PDO::PARAM_STR);
            $statement->bindParam(':estatura', $estatura, PDO::PARAM_STR);
            $statement->bindParam(':telefonoEmergencia', $telefonoEmergencia, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->bindParam(':observaciones', $observaciones, PDO::PARAM_STR);
            $statement->bindParam(':fkIdRol', $fkIdRol, PDO::PARAM_INT);
            $statement->bindParam(':fkIdGrupo', $fkIdGrupo, PDO::PARAM_INT);
            $statement->bindParam(':fkIdCentroFormacion', $fkIdCentroFormacion, PDO::PARAM_INT);
            $statement->bindParam(':fkIdTipoUserGym', $fkIdTipoUserGym, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el usuario>" . $ex->getMessage();
        }
    }

    public function getUsuario($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el usuario>" . $ex->getMessage();
        }
    }

    public function editUsuario($id, $nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, 
    $estado, $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $password, 
    $observaciones, $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, tipoDocumento=:tipoDocumento, documento=:documento, 
                    fechaNacimiento=:fechaNacimiento, email=:email, genero=:genero, estado=:estado, 
                    telefono=:telefono, eps=:eps, tipoSangre=:tipoSangre, peso=:peso, estatura=:estatura, 
                    telefonoEmergencia=:telefonoEmergencia, password=:password, observaciones=:observaciones, 
                    fkIdRol=:fkIdRol, fkIdGrupo=:fkIdGrupo, fkIdCentroFormacion=:fkIdCentroFormacion, 
                    fkIdTipoUserGym=:fkIdTipoUserGym WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':tipoDocumento', $tipoDocumento, PDO::PARAM_STR); // Updated
            $statement->bindParam(':documento', $documento, PDO::PARAM_STR);
            $statement->bindParam(':fechaNacimiento', $fechaNacimiento);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':genero', $genero, PDO::PARAM_STR); // Updated
            $statement->bindParam(':estado', $estado, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':eps', $eps, PDO::PARAM_STR);
            $statement->bindParam(':tipoSangre', $tipoSangre, PDO::PARAM_STR);
            $statement->bindParam(':peso', $peso, PDO::PARAM_STR);
            $statement->bindParam(':estatura', $estatura, PDO::PARAM_STR);
            $statement->bindParam(':telefonoEmergencia', $telefonoEmergencia, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->bindParam(':observaciones', $observaciones, PDO::PARAM_STR);
            $statement->bindParam(':fkIdRol', $fkIdRol, PDO::PARAM_INT);
            $statement->bindParam(':fkIdGrupo', $fkIdGrupo, PDO::PARAM_INT);
            $statement->bindParam(':fkIdCentroFormacion', $fkIdCentroFormacion, PDO::PARAM_INT);
            $statement->bindParam(':fkIdTipoUserGym', $fkIdTipoUserGym, PDO::PARAM_INT);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el usuario>" . $ex->getMessage();
        }
    }

    public function removeUsuario($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el usuario: " . $ex->getMessage();
            return false;
        }
    }
    public function validarLogin($email, $password){
        $sql = "SELECT * FROM $this->table WHERE email=:email";
        $statement = $this->dbConnection->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->execute();
        $resultSet = [];
        while($row = $statement->fetch(PDO::FETCH_OBJ)){
            $resultSet[] = $row;
        }
        if (count($resultSet)> 0 ) {
            $hash = $resultSet[0]->password;
            if (password_verify($password, $hash)) {
                //La contraseña ingresada es correcta
                $_SESSION['nombre'] = $resultSet[0]->nombre;
                $_SESSION['documento'] = $resultSet[0]->documento;
                $_SESSION['rol'] = $resultSet[0]->fkIdRol;
                $_SESSION['timeOut'] = time();
                session_regenerate_id();
                return true;
            }
        }
        return false;
    }
}