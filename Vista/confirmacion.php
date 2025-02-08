<?php
include("../Modelo/conexion.php");
$conexion=conexion();
// Ejecutar la consulta
$codigo=$_GET["codigo"];
$query = "SELECT *
   
FROM 
    `reserva`
INNER JOIN 
    `cliente` ON `reserva`.`id_cliente` = `cliente`.`id_cliente`
WHERE 
    `reserva`.`codigo_confirmacion` = '$codigo';
";

$resultado = mysqli_query($conexion, $query);
$row2 = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Reserva</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Confirmar Reserva</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Nombre:</strong> <?php echo $row2['nombre']." ". $row2['apellido'] ?> </p>
                        <p><strong>Documento:</strong> <?php echo $row2['id_cliente'] ?></p>
                        <p><strong>Personas:</strong> <?php echo $row2['numero_personas'] ?></p>
                        <p><strong>Fecha de entrada:</strong> <?php echo $row2['fecha_check_in'] ?></p>
                        <p><strong>Fecha de salida:</strong> <?php echo $row2['fecha_check_out'] ?></p>
                        <p><strong>Total a pagar:</strong> <?php echo $row2['monto_total'] ?></p>
                        <p><strong>Método de pago:</strong> <?php echo $row2['metodo_pago'] ?></p>
                        <p><strong>Código de la reserva:</strong> <?php echo $row2['codigo_confirmacion'] ?></p>
                       

                        <!-- Botón para confirmar la reserva -->
                        <div class="text-center">
                            <a href="./index.php"> <button class="btn btn-success"  >Confirmar Reserva</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    
    
</body>
</html>
