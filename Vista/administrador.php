<?php
include("../Modelo/conexion.php");
$conexion=conexion();
// Ejecutar la consulta
$habitacion = isset($_GET['habitacion']) ? $_GET['habitacion'] : null;
$cliente = isset($_GET['cliente']) ? $_GET['cliente'] : null;
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : null;
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : null;
$estado = isset($_GET['estado']) ? $_GET['estado'] : null;

// Empezamos con una consulta base
$query = "SELECT * FROM `reserva` INNER JOIN `cliente` ON `reserva`.`id_cliente` = `cliente`.`id_cliente`";

// Creamos un array para almacenar las condiciones
$conditions = [];

// Si la habitacion no está vacía, agregamos una condición para buscar por habitacion
if (!empty($habitacion)) {
    $conditions[] = "`reserva`.`id_habitacion` = '$habitacion'";
}

// Si el cliente no está vacío, agregamos una condición para buscar por cliente
if (!empty($cliente)) {
    $conditions[] = "`cliente`.`nombre_completo` LIKE '%$cliente%'";
}

if (!empty($codigo)) {
        
    $codigo_mayuscula = strtolower($codigo);
    $conditions[] = "`reserva`.`codigo_confirmacion` = '$codigo_mayuscula'";
}

if (!empty($estado)) {
        
    $estado_mayuscula = strtolower($estado);
    $conditions[] = "`reserva`.`estado_reserva` = '$estado_mayuscula'";
}
if (!empty($fecha)) {
        
    $fecha1 = new DateTime($fecha);
    $fechaFormateada = $fecha1->format('Y-m-d');
    $conditions[] = "`reserva`.`fecha_check_in` = '$fechaFormateada'";
}
// Si hay alguna condición, las añadimos a la consulta
if (!empty($conditions)) {
    $query .= " WHERE " . implode(" AND ", $conditions);
}

// Añadimos el ordenamiento
$query .= " ORDER BY `fecha_check_in` ASC";

// Ejecutamos la consulta
$resultado = mysqli_query($conexion, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL RESTAURANTE KRISAIDA</title>
    <link rel="stylesheet" href="Public/estilos2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <link id="modo_estilo" rel="stylesheet" href="Public/modo_claro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
  /* Contenedor para los campos alineados horizontalmente */
.form-container {
    display: flex;
    justify-content: center; /* Distribuye los campos de manera equitativa */
    gap: 20px; /* Espacio entre los elementos */
    flex-wrap: wrap; /* Permite que los campos se ajusten si no caben en una sola línea */
    margin-bottom: 20px; /* Espacio adicional debajo de los campos */
}

/* Estilo para los inputs y selects */
input[type="text"],
input[type="date"],
select {
    border: 2px solid #cecece;
    border-radius: 5px;
    font-size: 20px;
    color: #a4a4a4;
    width: 200px; /* Ancho definido para los campos */
    
}

/* Estilo para el botón */
button {
    width: 20%; /* Hace que el botón ocupe todo el ancho */
    padding: 10px;
    font-size: 20px;
    background-color: #FF8C00; 
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
      }

/* Opcional: Para centrar las etiquetas y campos si es necesario */
.form-container label,
.form-container input,
.form-container select {
    text-align: center;
}


    </style>
</head>

<body>
<?php
      session_start();
    ?>

<header>
        <nav class="navbar">
            <div class="container">
                <h1 class="title"><a href="index.php" class="link-text" data-es="Hotel Restaurante Krisaida" data-en="Hotel Restaurant Krisaida">Hotel Restaurante Krisaida</a></h1>
            </div>

            <div class="links">
                <ul>               
                    <?php
                    if ($_SESSION['user']) {
                        $usuario = $_SESSION['user']; 
                    // Asumiendo que 'user' guarda el nombre del usuario
                        echo "<li><a>$usuario</a></li>";
                    }else{
                        echo' <li><a class="link-text" data-es="Iniciar sesión" data-en="Login" href="inicio_sesion.php">Inicio de Sesión</a></li>';
                    }
                    ?>
                     <li><a class="link-text" data-es="Comentarios" data-en="Comments" href="./comentario.php"></a></li>
                     <li><a class="link-text" data-es="Administracion" data-en="Administration" href="./administrador.php"></a></li>
                     <li><a class="link-text" data-es="Cerrar sesión" data-en="Logout" href="../Controlador/Logout.php"></a></li>
                     
                </ul>
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

<div>
    <form class="form-container" id="myForm" action="" method="GET">
        <input type="text" name="habitacion"placeholder="habitación">
        <input type="text" name="cliente" placeholder="cliente">
        <input type="text" name="codigo" placeholder="codigo">
        <input type="date" name="fecha">
        <input type="text" name="estado" placeholder="estado">
        <button type="submit"> Buscar  </button>
    </form>
</div>
<br>
<hr>

    <div class= "container-tabla">
        <table>
        <thead>
            <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Documento</th>
            <th scope="col">Personas</th>
            <th scope="col">Habitación</th>
            <th scope="col">Fecha de entrada</th>
            <th scope="col">Fecha de salida</th>
            <th scope="col">Total a pagar</th>
            <th scope="col">Método de pago</th>
            <th scope="col">Estado</th>
            <th scope="col">Código de la reserva</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row =mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?=$row['nombre']. " "  . $row['apellido']?></td>
                <td><?=$row['id_cliente']?></td>
                <td><?=$row['numero_personas']?></td>
                <td><?=$row['id_habitacion']?></td>
                <td><?=$row['fecha_check_in']?></td>
                <td><?=$row['fecha_check_out']?></td>
                <td><?=$row['monto_total']?></td>
                <td><?=$row['metodo_pago']?></td>
                <td><?=$row['estado_reserva']?></td>
                <td><?=$row['codigo_confirmacion']?></td>
                <td> <a href="../Controlador/eliminar.php?id=<?=$row['id_reserva']?>">Eliminar</a> </td>
                <td> <a href="./editar.php?id=<?=$row['id_reserva']?>">Editar</a> </td>
            </tr>
            <?php
            endwhile;
            ?>
        </tbody>
        </table>
</div>

    <script src="hotel.js"></script>

    <script>
    document.getElementById('myForm').onsubmit = function(e) {
        // Obtener todos los elementos del formulario
        const formElements = e.target.elements;
        
        // Recorrer los campos del formulario y eliminar los vacíos
        for (let i = 0; i < formElements.length; i++) {
            if (formElements[i].value.trim() === "") {
                // Si el campo está vacío, eliminamos el campo del formulario
                formElements[i].removeAttribute('name');
            }
        }
    };
</script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</html>