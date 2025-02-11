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
        <link rel="stylesheet" href="css/font-awesome.min.css">
    
    </head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <h1 class="title"><a href="index.php" class="link-text"  data-es="Hotel Restaurante Krisaida"
                        data-en="Hotel Restaurant Krisaida">Hotel Restaurante Krisaida</a></h1>
            </div>

            
            <div class="links">
                <ul>
                    <li><a class="link-text" data-es="Inicio" data-en="Home" href="index.php">Inicio</a></li>
                    
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

    <section id="login">
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form action="../Controlador/Login.php" method="POST">
            <div class="form-group">
                <label class="link-text" data-es="Usuario" data-en="User">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label class="link-text" data-es="Contraseña" data-en="Password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Iniciar sesión" name="btnLogin">
            </div>
        </form>
        <div class="login-links">
            <p ><a href="">¿Olvidaste tu nombre de usuario?</a></p>
            <p><a href="">¿Olvidaste tu contraseña?</a></p>
        </div>
    </div>
    </section>

   <script src="hotel.js"></script>
</body>
</html>