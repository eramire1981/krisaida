<?php
include("../Modelo/conexion.php");
$conexion=conexion();
// Ejecutar la consulta
$id=$_GET["id"];
$query = "SELECT *
   
FROM 
    `reserva`
INNER JOIN 
    `cliente` ON `reserva`.`id_cliente` = `cliente`.`id_cliente`
WHERE 
    `reserva`.`id_reserva` = '$id';
";

$resultado = mysqli_query($conexion, $query);
$row2 = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RESTAURANTE KRISAIDA</title>
    <link rel="stylesheet" href="Public/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <link id="modo_estilo" rel="stylesheet" href="Public/modo_claro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <h1 class="title"><a href="index.php" class="link-text" data-es="Hotel Restaurante Krisaida"
                        data-en="Hotel Restaurant Krisaida">Hotel Restaurante Krisaida</a></h1>
            </div>


            <div class="links">
                <ul>
                    <li><a class="link-text" data-es="Inicio" data-en="Home" href="index.php">Inicio</a></li>

            </div>
            </div>

            <div class="containermodo">
                <button id="btn_modo" class="modo">
                    <img src="Public/img/claroscuro.png" alt="Cambiar tema">
                </button>
            </div>

            <div class="containerlinks">
                <div class="containerlenguaje">
                    <div class="flag-container">
                        <div class="tooltip">
                            <div id="toggle-button"><img id="flag" src="Public/img/espana.png" alt="Bandera" /></div>
                            <span id="tooltip-text" class="tooltip-text">Cambiar a Inglés</span>
                        </div>
                    </div>
                </div>
        </nav>

    </header>
  
   
    <div class="contenedor-contacto">
    <div class="contenedor-titulo">
                <h3 class="titulo"> Editar reserva</h3>
            </div>
       <div class="contacto">
                    <form class="formulario" action="../Controlador/update.php" method="POST">
                        <input type="text" name="id" hidden value= "<?php echo $row2['id_reserva']?> ">
                        <label class="link-text" data-es="Nombre" data-en="Name"></label>
                        <input type="text" name="nombre" disabled value= "<?php echo $row2['nombre']?> ">
                        </br>
                        <label class="link-text" data-es="Apellido" data-en="Last Name"></label>
                        <input type="text" name="apellido" disabled value= "<?php echo $row2['apellido']?> ">
                        </br>
                        <label class="link-text" data-es="Documento de identidad" data-en="ID"></label>
                        <input type="text" name="documento" disabled value= "<?php echo $row2['id_cliente']?> ">
                        </br>
                        <label class="link-text" data-es="Dirección" data-en="Address"></label>
                        <input type="text" name="direccion" disabled value= "<?php echo $row2['direccion']?> ">
                        </br>
                        <label class="link-text" data-es="Teléfono" data-en="Phone number"></label>
                        <input type="text" name="telefono" disabled value= "<?php echo $row2['telefono']?> ">
                        <br/>
                        <label class="link-text" data-es="Nacionalidad" data-en="Nationality"></label>
                        <input type="text" name="nacionalidad" disabled value= "<?php echo $row2['nacionalidad']?> ">
                        <br/>
                        <label class="link-text" data-es="Correo" data-en="E-mail"></label>
                        <input type="text" name="correo" disabled value= "<?php echo $row2['correo']?> ">
                        <br />                       
                        <label class="link-text" data-es="Número de huéspedes" data-en="Number of guests"></label>
                        <select id="huespedes" name="huespedes" disabled>
                            <option value="1" <?php if ($row2['numero_personas'] == 1) echo 'selected'; ?>>1</option>
                            <option value="2" <?php if ($row2['numero_personas'] == 2) echo 'selected'; ?>>2</option>
                            <option value="3" <?php if ($row2['numero_personas'] == 3) echo 'selected'; ?>>3</option>
                            <option value="4" <?php if ($row2['numero_personas'] == 4) echo 'selected'; ?>>4</option>
                            <option value="5" <?php if ($row2['numero_personas'] == 5) echo 'selected'; ?>>5</option>
                            <option value="6" <?php if ($row2['numero_personas'] == 6) echo 'selected'; ?>>6</option>
                            <option disabled value=" ">Si el número de huespedes es más de 6</option>
                            <option disabled value=" ">Haga otra reserva</option>
                        </select>

                        <br />
                        <label class="link-text" data-es="Fecha de entrada" data-en="Check in"></label>
                        <input type="date" name="entrada" disabled value="<?php echo $row2['fecha_check_in']; ?>">
                        <br />

                        <label class="link-text" data-es="Fecha de salida" data-en="Check out"></label>
                        <input type="date" name="salida" disabled value="<?php echo $row2['fecha_check_out']; ?>">
                        <br />
                        <label class="link-text" data-es="Precio" data-en="Price"></label>
                        <input type="text" name="precio" required value= "<?php echo $row2['monto_total']?> ">
                        <br />
                        <label class="link-text" data-es="Método de pago" data-en="Pay method"></label>
                        <select id="metodo_pago" name="metodo" required>
                            <option value="tarjeta" <?php if ($row2['metodo_pago'] == 'tarjeta') echo 'selected'; ?>>Tarjeta</option>
                            <option value="transferencia" <?php if ($row2['metodo_pago'] == 'transferencia') echo 'selected'; ?>>Transferencia</option>
                            <option value="efectivo" <?php if ($row2['metodo_pago'] == 'efectivo') echo 'selected'; ?>>Efectivo</option>
                        </select>
                        <label class="link-text" data-es="Estado" data-en="Status"></label>
                        <input type="text" name="estado" required value= "<?php echo $row2['estado_reserva']?> ">
                        <br/><br/>
                        <div class="contenedor-boton">
                            <input class=" boton" type="submit" value="Editar reserva">
                            <a href="./administrador.php"><input class=" boton" value="Cancelar"></a>
                         <br /> <br />
                        
                        </div>
                    </form>
                </div>
</div>
       
    <script src="hotel.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
           
</body>

</html>