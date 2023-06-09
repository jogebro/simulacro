<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
    class Empleado extends Conexion{

        public function getEmpleado(){
            try {
                $conectar = parent::conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM empleados");
                $stm -> execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exeption $e) {
                return $e->getMessage();
            }
        }

        public function getEmpleadoId($id){
            try {
                $conectar = parent::conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM empleados WHERE id = ?");
                $stm -> bindValue(1,$id);
                $stm -> execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exeption $e) {
                return $e->getMessage();
            }
        }

        public function insertEmpleado($id, $usuario, $password){
            $conectar = parent::conexion();
            parent::set_name();
            $stm = "INSERT INTO empleados (id, usuario, password) VALUES (?, ?, ?)";
            $stm = $conectar -> prepare($stm);
            $stm -> bindValue(1,$id);
            $stm -> bindValue(2,$usuario);
            $stm -> bindValue(3,$password);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>