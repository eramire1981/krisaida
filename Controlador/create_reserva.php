<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$id=null;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$nacionalidad=$_POST['nacionalidad'];
$correo=$_POST['correo'];
$huespedes=$_POST['huespedes'];
$entrada=$_POST['entrada'];
$salida=$_POST['salida'];
$fecha= date('Y-m-d H:i:s');
$pago=$_POST['metodo'];
$id_habitacion=101;
//echo $nombre . " " . $apellido . " " . $direccion . " " . $telefono . " " . $nacionalidad . " " . $correo . " " . $huespedes . " " . $entrada . " " . $salida . " " . $pago;

//código para saber el número de días
$fecha1 = new DateTime($entrada);
$fecha2 = new DateTime($salida);
$intervalo = $fecha1->diff($fecha2);
$numeroDeDias = $intervalo->days;

// Agregar validaciones de tope de camas y que no reserve la misma habitación
//Buscar todas las reservas en un rango de fechas. Hacer un select entre las fechas para reservas. tomar las habitaciones ocupadas

$queryhabitacion_ocupada = "SELECT `id_habitacion` FROM `reserva` WHERE (`fecha_check_in` BETWEEN '$entrada' AND '$salida') 
    OR (`fecha_check_out` BETWEEN '$entrada' AND '$salida')";

$consultarhabitacion = mysqli_query($conexion, $queryhabitacion_ocupada);

/*
if ($consultarhabitacion) {
    while ($row = mysqli_fetch_assoc($consultarhabitacion)) {
        echo "ID de habitación: " . $row['id_habitacion'] . "<br>";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

*/

//select en tabla habitaciones. Traer todas las habitaciones excepto las ocupadas. Traer aquellas en las cuales la capacidad sea >= numero de personas
//ordenar por capacidad

$queryhabitacion_disponible = " SELECT `id_habitacion` FROM `habitacion` WHERE`capacidad` >= '$huespedes' AND `id_habitacion` NOT IN ( SELECT `id_habitacion` FROM `reserva` 
        WHERE (`fecha_check_in` BETWEEN '$entrada' AND '$salida') 
        OR (`fecha_check_out` BETWEEN '$entrada' AND '$salida')) ORDER BY `capacidad` asc";

$consultarhabitacion2 = mysqli_query($conexion, $queryhabitacion_disponible);

if ($consultarhabitacion2) {
    // Verificar si hay al menos una habitación disponible
    if (mysqli_num_rows($consultarhabitacion2) > 0) {
        // Tomar la primera habitación disponible
        $row = mysqli_fetch_assoc($consultarhabitacion2);
        $id_habitacion = $row['id_habitacion'];

        // Mostrar el ID de la habitación antes de ser asignada
        //echo "Habitación antes de ser asignada: " . $id_habitacion;

               /* 
        while ($row = mysqli_fetch_assoc($consultarhabitacion2)) {
            echo "ID de habitación disponible: " . $row['id_habitacion'] . "<br>";
        }
        */

    } else {
        
        echo "<script>alert('No hay habitaciones disponibles para las fechas seleccionadas.');</script>";
        
        exit(); 
    }
} else {
    
    exit(); // Detener la ejecución del script PHP
}

// código para generar el código de reserva
function generarCodigo() {
    $letras = '';
    $numeros = '';
    
    // Generar tres letras aleatorias
    for ($i = 0; $i < 3; $i++) {
        $letras .= chr(rand(65, 90));  // Genera una letra mayúscula aleatoria (A-Z)
    }
    
    // Generar tres números aleatorios
    for ($i = 0; $i < 3; $i++) {
        $numeros .= rand(0, 9);  // Genera un número aleatorio (0-9)
    }

    // Concatenar las letras y los números en un solo código
    return $letras . $numeros;
}

// Generar y mostrar el código aleatorio
$codigo = generarCodigo();

// monto total
$fechaparames = new DateTime($salida);
$mes = $fechaparames->format('m');

$preciototal= 0;
if ($mes == '01' || $mes == '06' || $mes == '07' || $mes == '12') {
    $preciototal= $huespedes*60000*$numeroDeDias;
}
else {  $preciototal= $huespedes*50000*$numeroDeDias;
}
// consultar si un cliente ya existe
$querycliente = "SELECT `id_cliente`, `nombre`, `apellido`, `direccion`, `telefono`, `nacionalidad`, `correo` FROM `cliente` WHERE `id_cliente`='$documento'";

$consultarcliente = mysqli_query($conexion, $querycliente);

if (mysqli_num_rows($consultarcliente) == 0) {
    $nombre_completo= $nombre." ".$apellido;
    $cliente = "INSERT INTO `cliente`(`id_cliente`, `nombre`, `apellido`, `nombre_completo`, `direccion`, `telefono`, `nacionalidad`, `correo`) 
                VALUES ('$documento', '$nombre', '$apellido', '$nombre_completo', '$direccion', '$telefono', '$nacionalidad', '$correo')";
    
    mysqli_query($conexion, $cliente);
        
} 

$insertar="INSERT INTO `reserva`(`fecha_check_in`, `fecha_check_out`, `numero_personas`, `numero_dias`, `monto_total`, `fecha_reserva`, `estado_reserva`, `metodo_pago`, `codigo_confirmacion`, `id_habitacion`, `id_cliente`) VALUES ('$entrada','$salida','$huespedes','$numeroDeDias','$preciototal','$fecha','pendiente','$pago','$codigo','$id_habitacion','$documento')";
    if (mysqli_query($conexion, $insertar)  == TRUE) {
       echo "
            <script>
                window.location = '../Vista/confirmacion.php?codigo=$codigo';
            </script>
            ";
     }else {
            "
            <script>
                alert('Error al crear reserva');
                window.location = '../Vista/reserva.php';
            </script>
            ";
     }


mysqli_close($conexion);
?>