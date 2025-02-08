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



//select en tabla habitaciones. Traer todas las habitaciones excepto las ocupadas. Traer aquellas en las cuales la capacidad sea >= numero de personas
//ordenar por capacidad

//Condicional Si lo anterior retorna cero, no hay habitaciones disponibles y rompa el código.


//hola



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
    $cliente = "INSERT INTO `cliente`(`id_cliente`, `nombre`, `apellido`, `direccion`, `telefono`, `nacionalidad`, `correo`) 
                VALUES ('$documento', '$nombre', '$apellido', '$direccion', '$telefono', '$nacionalidad', '$correo')";
    
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