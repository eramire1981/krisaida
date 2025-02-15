<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$id=$_POST["id"];
$metodo=$_POST["metodo"];
$estado=$_POST["estado"];
$precio=$_POST["precio"];
$query= "UPDATE `reserva` SET `monto_total`='$precio',`estado_reserva`='$estado',`metodo_pago`='$metodo' WHERE `id_reserva`='$id'";
if (mysqli_query($conexion, $query)  == TRUE) {
    echo "
    <script>
        alert('Reserva editada correctamente');
        window.location = '../Vista/administrador.php';
    </script>
    ";
}else {
    "
    <script>
        alert('Error al editarr una reserva');
        window.location = '../Vista/administrador.php';
    </script>
    ";
}


mysqli_close($conexion);
?>