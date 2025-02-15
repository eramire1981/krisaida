<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$id=$_GET["id"];
$query= "DELETE FROM `reserva` WHERE `id_reserva`= '$id'";
if (mysqli_query($conexion, $query)  == TRUE) {
    echo "
    <script>
        alert('Reserva eliminada correctamente');
        window.location = '../Vista/administrador.php';
    </script>
    ";
}else {
    "
    <script>
        alert('Error al eliminar una reserva');
        window.location = '../Vista/administrador.php';
    </script>
    ";
}


mysqli_close($conexion);
?>