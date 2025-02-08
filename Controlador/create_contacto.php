<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$id=null;
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje= $_POST['mensaje'];
$fecha= date('Y-m-d H:i:s');
$insertar="INSERT INTO `contacto`( `nombre`, `telefono`, `correo`, `mensaje` , `fecha`) VALUES ('$nombre','$telefono','$correo','$mensaje','$fecha')";
if (mysqli_query($conexion, $insertar)  == TRUE) {
    echo "
    <script>
        alert('mensaje enviado correctamente');
        window.location = '../Vista/index.php';
    </script>
    ";
}else {
    "
    <script>
        alert('Error al enviar mensaje');
        window.location = '../Vista/index.php';
    </script>
    ";
}


mysqli_close($conexion);
?>