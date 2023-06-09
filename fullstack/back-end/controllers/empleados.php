<?php 
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

header('Content-Type: application/json');

require_once("../Config/Conexion.php");
require_once("../models/Empleado.php");

$empleado = new Empleado();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $empleado->getEmpleado();
        echo json_encode($datos);
        break;

    case "GetId":
        $datos = $empleado->getEmpleadoId($body["id"]);
        echo json_encode($datos);
        break;
    case "Insert":
        $datos = $empleado->insertEmpleado($body['id'], $body['usuario'], md5($body['password']));
        echo json_encode("Insertado Correctamente");
        break;
}
?>