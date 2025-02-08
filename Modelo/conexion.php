<?php
function conexion (){

    $host = "localhost:3307";

    $usuario= "root";

    $contrasena="";

    $bd="krisaida";

    $connect= mysqli_connect($host, $usuario, $contrasena);

    mysqli_select_db($connect, $bd);

    return $connect;
 }


?>