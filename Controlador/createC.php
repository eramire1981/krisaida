<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$id=null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
$insertar="INSERT INTO `cliente`(`id`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES ('$id','$nombre','$apellido','$direccion','$telefono')";
if (mysqli_query($conexion, $insertar)  == TRUE) {
    echo "
    <script>
        alert('Usuario registrado correctamente');
        window.location = '../Vista/cliente.php';
    </script>
    ";
}else {
    "
    <script>
        alert('Error al registrar usuario');
        window.location = '../Vista/cliente.php';
    </script>
    ";
}


mysqli_close($conexion);
?>