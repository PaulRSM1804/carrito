<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $usuario = $_POST["usr"];
        $clave = $_POST["pwd"];
       

        $sql = "insert into clientes values(null, '$nombre', '$apellido', '$direccion', '$usuario, '$clave)";
        if(mysqli_query($conn,$sql))
        {
            echo "Datos guardados correctamente...";
        }else{
            echo "Error al guardar, revisa porfavor...";
        }
    
}