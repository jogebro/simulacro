<?php
    ini_set("display_errors", 1);

    ini_set("display_startup_errors", 1);
        
    error_reporting(E_ALL);
    
        $empleados = '[
            {
            "id": 1,
            "usuario": "Joelcito",
            "password": "1234"
            },
            {
            "id": 2,
            "usuario": "Fabiolo",
            "password": "1234"
            },
            {
            "id": 3,
            "usuario": "Valen",
            "password": "12345"
            }
        ]';
    
        $datosEmpleados = json_decode($empleados, true);
            
        $server = "localhost";
        $user = "campus";
        $pass = "campus2023";
        $bd = "alquilartemis";

        $conexion = mysqli_connect($server, $user, $pass, $bd) 
        or die("Ha sucedido un error inesperado en la conexion de la base de datos");

        foreach ($datosEmpleados as $empleado) {
            mysqli_query($conexion, "INSERT INTO empleados (id, usuario, password) VALUES ('".$empleado['id']."','".$empleado['usuario']."','".md5($empleado['password'])."')");
        }

        mysqli_close($conexion);

        

?>