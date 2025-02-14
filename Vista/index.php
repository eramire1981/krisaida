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

            <div class="botonreserva">
                <a href="reserva.php">
                    <button id="btn_reserva" class="botonreserva">
                        Reservas
                    </button>
                </a>
            </div>

            <div class="links">
                <ul>
                    <li><a class="link-text" data-es="Inicio" data-en="Home" href="index.php">Inicio</a></li>
                    <li><a class="link-text" data-es="Habitaciones" data-en="Rooms" href="#habitaciones">Habitaciones</a> </li>
                    <li><a class="link-text" data-es="Contacto" data-en="Contacto" href="#contacto">Contacto</a></li>
                    <li><a class="link-text" data-es="Iniciar sesión" data-en="Login" href="inicio_sesion.php">Inicio de Sesión</a></li>
                                       
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

    <section id="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="Public/img/Imagen1.jpg" alt="Hotel Image 1">
                <img src="Public/img/Imagen2.jpg" alt="Hotel Image 2">
                <img src="Public/img/Imagen3.jpg" alt="Hotel Image 3">
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="nosotros">
            <div class="somos">
                <div class="contenedor-titulo">
                    <h3 class="titulo"> Quiénes somos</h3>
                </div>
                <p class="link-text" data-es="Somos un hotel familiar
                con un invaluable recurso humano,  
                con disposición de atender sus clientes de la mejor manera
                para proporcionarles una experiencia placentera y agradable,
                garantizando a nuestros clientes la mayor confiabilidad 
                y satisfacción en la prestación del servicio ya sea por turismo o por trabajo." data-en=" We are a family hotel with invaluable human resources,  
                willing to serve their clients in the best way to provide them with a pleasant experience,
                guaranteeing our clients the greatest reliability 
                and satisfaction in the provision of the service whether for tourism or work"></p>
            </div>

            <div class="ubicacion">
                <div class="contenedor-titulo">
                    <h3 class="titulo"> Ubicación</h3>
                </div>
                <p class="link-text" data-es="Estamos ubicados en Bocagrande a 30 minutos del aeropuerto Rafael Núñez, a 3 minutos de la playa y
                 a 15 minutos de la ciudad amurallada. Además, estamos ubicados a una cuadra del paradero de transcaribe y en la zona turística y 
                 comercial más visitada de la ciudad de Cartagena." data-en=" We are located in Bocagrande 30 minutes from the Rafael Núñez airport, 3 minutes from the beach and
                 15 minutes from the walled city. In addition, we are located one block from the Transcaribe bus stop and in the tourist area and 
                 most visited shopping center in the city of Cartagena."></p>
            </div>

            <div class="servicios">
                <div class="contenedor-titulo">
                    <h3 class="titulo"> Servicios adicionales</h3>
                </div>
                <p class="link-text" data-es="Contamos con servicio de restaurante de comida típica y celebración de eventos. También 
                ofrecemos el servicio de decoración de habitaciones para celebraciones especiales como cumpleaños,
                 aniversarios que te brindarán momentos inolvidables." data-en=" We have typical food restaurant service and event celebrations. Also 
                 we offer room decoration service for special celebrations such as birthdays,
                  anniversaries that will give you unforgettable moments."></p>
            </div>

        </div>
        </div>
        <hr>
        <section id="habitaciones">
            <div class="contenedor-titulo">
                <h3 class="titulo"> Tipos de Habitaciones</h3>
            </div>
            <div class="habitaciones">
                <div class="somos">
                    <div class="contenedor-titulo">
                        <h3 class="titulo"> Habitación doble</h3>
                    </div>
                    <p class="link-text" data-es="Habitación dotada con todo lo necesario para su estadía. "></p>
                    <p> En esta habitación encontrará:</p>
                    <li>TV LCD de 32 pulgadas</li>
                    <li>Cama de 1.40 x 1.90 mt.</li>
                    <li>Aire acondicionado</li>
                    <li>baño privado</li>
                    <li>Mesa de noche</li>
                    <li>Closet o cajonera</li>


                </div>

                <div class="ubicacion">
                    <div class="contenedor-titulo">
                        <h3 class="titulo"> Habitación múltiple</h3>
                    </div>
                    <p class="link-text"
                        data-es="Habitación dotada con todo lo que necesitas para tí y tu familia. puede ser acomodada a tus ncesidades, según el número de ocupantes.">
                    </p>
                    <p> En esta habitación encontrará:</p>
                    <li>TV LCD de 32 pulgadas</li>
                    <li>Cama de 1.40 x 1.90 mt.</li>
                    <li>Camarotes</li>
                    <li>Cama de 1.00 x 1.90 mt.</li>
                    <li>Aire acondicionado</li>
                    <li>baño privado</li>
                    <li>Mesa de noche</li>
                    <li>Closet o cajonera</li>

                </div>

                <div class="servicios">
                    <div class="contenedor-titulo">
                        <h3 class="titulo"> Datos para tu estadía</h3>
                    </div>

                    <li><img src="Public/img/checkout.png" width="50"> Check in 2:00 pm/ Check out 12:00 m</li>
                    <br>
                    <li><img src="Public/img/internet.png" width="50">Internet gratuito</li>
                    <br>
                    <li><img src="Public/img/humo.png" width="50">Espacio libre de humo</li>
                    <br>
                    <li><img src="Public/img/pago.png" width="50">Medios de pago: Efectivo, tarjeta, transferencia</li>


                </div>

            </div>
        </section>

    <!-- Ícono de WhatsApp -->
    <i id="whatsapp-icon" class="fab fa-whatsapp"></i>

        <script src="hotel.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

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

                <div class="contacto2">
                    <form class="formulario" action="../Controlador/create_contacto.php" method="POST">
                        <label class="link-text" data-es="Nombre" data-en="Name"></label>
                        <input type="text" name="nombre" required>
                        </br>
                        <label class="link-text" data-es="Teléfono" data-en="Phone number"></label>
                        <input type="text" name="telefono" required>
                        </br>
                        <label class="link-text" data-es="Correo" data-en="E-mail"></label>
                        <input type="text" name="correo" required>
                        <br />
                        <label class="link-text" data-es="Mensaje" data-en="Message"></label>
                        <textarea name="mensaje"></textarea>
                        <br />
                        <div class="contenedor-boton">
                            <input class=" boton" type="submit" value="Enviar">
                        </div>
                    </form>
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