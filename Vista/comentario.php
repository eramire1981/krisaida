<?php
include("../Modelo/conexion.php");
$conexion=conexion();
$query = "SELECT * FROM `contacto` ORDER BY `fecha` DESC";
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

<br>
<hr>

    <div class= "container-tabla">
        <table>
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Correo</th>
            <th scope="col">Mensaje</th>
           
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row =mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?=$row['nombre']?></td>
                <td><?=$row['telefono']?></td>
                <td><?=$row['correo']?></td>
                <td><?=$row['mensaje']?></td>              
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