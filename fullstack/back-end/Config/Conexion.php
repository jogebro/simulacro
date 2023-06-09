<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
    class Conexion{
        protected $db;

        protected function conexion(){
            try {
                $conectar = $this->db = new PDO("mysql:local=localhost;dbname=alquilartemis", "campus", "campus2023");
                return $conectar;
    
            } catch (Exeption $e) {
                return $e->getMessage();
                die();
            }
        }
    
        public function set_name(){
            return $this->db->query("SET NAMES 'utf8'");
        }
    
    }

?>