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
                <h3 class="titulo"> Haz tu reserva</h3>
            </div>
       <div class="contacto">
                    <form class="formulario" action="../Controlador/create_reserva.php" method="POST">
                        <label class="link-text" data-es="Nombre" data-en="Name"></label>
                        <input type="text" name="nombre" required>
                        </br>
                        <label class="link-text" data-es="Apellido" data-en="Last Name"></label>
                        <input type="text" name="apellido" required>
                        </br>
                        <label class="link-text" data-es="Documento de identidad" data-en="ID"></label>
                        <input type="text" name="documento" required>
                        </br>
                        <label class="link-text" data-es="Dirección" data-en="Address"></label>
                        <input type="text" name="direccion" required>
                        </br>
                        <label class="link-text" data-es="Teléfono" data-en="Phone number"></label>
                        <input type="text" name="telefono" required>
                        <br/>
                        <label class="link-text" data-es="Nacionalidad" data-en="Nationality"></label>
                        <input type="text" name="nacionalidad" required>
                        <br/>
                        <label class="link-text" data-es="Correo" data-en="E-mail"></label>
                        <input type="text" name="correo" required>
                        <br />                       
                        <label class="link-text" data-es="Número de huéspedes" data-en="Number of guests"></label>
                        <select id="huespedes" name="huespedes" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option disabled value=" ">Si el número de huespedes es más de 6</option>
                            <option disabled value=" ">Haga otra reserva</option>
                        </select>
                        <br />
                        <label class="link-text" data-es="Fecha de entrada" data-en="Check in"></label>
                         <input type="date" name="entrada" required>
                         <br />
                         <label class="link-text" data-es="Fecha de salida" data-en="Check out"></label>
                         <input type="date"  name="salida" required>
                         <br/>
                         <label class="link-text" data-es="Método de pago" data-en="Pay method"></label>
                        <select id="metodo_pago" name="metodo" required>
                            <option value="tarjeta">Tarjeta</option>
                            <option value="transferencia">Transferencia</option>
                            <option value="efectivo">Efectivo</option>
                        </select>
                        <br/><br/>
                        <div class="contenedor-boton">
                            <input class=" boton" type="submit" value="Hacer reserva">
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
<br/>
    <hr />
<footer>
    <div class="contenedor-contacto">
        <section id="contacto">
            <div class="contenedor-titulo">
                <h3 class="titulo"> Contáctenos</h3>
            </div>

            <div class="contacto">
                <div class="informacion, contacto1">
                    <p class="link-text" data-es="Dirección: Carrera 3 No.4-158" data-en="Address: Carrera 3 No.4-158">
                    </p>
                    <p class="link-text" data-es="Teléfono: +57 6056652377" data-en="Phone Number: +57 6056652377"></p>
                    <p class="link-text" data-es="Correo electrónico: hotelrestaurantekrisaida@gmail.com"
                        data-en=" e mail: hotelrestaurantekrisaida@gmail.com"></p>
                    <p class>Cartagena, Colombia</p>
                </div>


                <div class="contacto3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.2903825478043!2d-75.5609984254871!3d10.39849566605213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef62f3dae81ca21%3A0x5a49a9e54b3cbb30!2sCra.%203%20%234-158%2C%20Cartagena%20de%20Indias%2C%20Provincia%20de%20Cartagena%2C%20Bol%C3%ADvar!5e0!3m2!1ses-419!2sco!4v1726534770683!5m2!1ses-419!2sco"
                        width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>

    </br>
   <section class=" redes-sociales">
        <div class=" contenedor">
            <a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a class="facebook" href="https://www.facebook.com/profile.php?id=100081150827996" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
            <a class="youtube" href="http://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a class="instagram" href="http://www.instagram.com/" target="_blank"> <i class="fa-brands fa-instagram"></i> </a>
        </div>
    </section>
</footer>
</body>

</html>