const slideInterval = 3000; // Intervalo entre cambios de imagen en milisegundos
const carouselSlide = document.querySelector('.carousel-slide');
const slides = document.querySelectorAll('.carousel-slide img');

let currentIndex = 0;

function moveToNextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    const offset = -currentIndex * 100;
    carouselSlide.style.transform = `translateX(${offset}%)`;
}

setInterval(moveToNextSlide, slideInterval);

// Código para el cambio de lenguaje
document.addEventListener('DOMContentLoaded', function() {
    const flagImg = document.getElementById('flag');
    const tooltipText = document.getElementById('tooltip-text');
    const linkTexts = document.querySelectorAll('.link-text');

    function updateContent(language) {
        if (language === 'es') {
            flagImg.src = 'Public/img/espana.png';
            tooltipText.textContent = 'Cambiar a Inglés';
            linkTexts.forEach(link => {
                link.textContent = link.getAttribute('data-es');
            });
        } else {
            flagImg.src = 'Public/img/inglaterra.png';
            tooltipText.textContent = 'Change to Spanish';
            linkTexts.forEach(link => {
                link.textContent = link.getAttribute('data-en');
            });
        }
    }

    // Inicializa el contenido con el idioma por defecto
    let currentLanguage = 'es';
    updateContent(currentLanguage);

    flagImg.addEventListener('click', function() {
        currentLanguage = (currentLanguage === 'es') ? 'en' : 'es';
        updateContent(currentLanguage);
    });
});

// Este es el código para cambiar de modo claro a oscuro
document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('btn_modo');
    const themeStyle = document.getElementById('modo_estilo');

    // Verifica el tema actual en el almacenamiento local
    let isDarkMode = localStorage.getItem('modo_oscuro') === 'true';
    setTheme(isDarkMode);

    button.addEventListener('click', () => {
        isDarkMode = !isDarkMode;
        setTheme(isDarkMode);
        // Guarda la preferencia en el almacenamiento local
        localStorage.setItem('modo_oscuro', isDarkMode);
    });

    function setTheme(isDark) {
        themeStyle.href = isDark ? 'Public/modo_oscuro.css' : 'Public/modo_claro.css';
           }
});

const whatsappIcon = document.getElementById("whatsapp-icon");

// Evento para abrir WhatsApp al hacer clic en el ícono
whatsappIcon.addEventListener("click", function() {
    // Número de teléfono y mensaje
    const phoneNumber = "573002780174";  // Número de teléfono de destino (incluye código de país)
    const message = "¡Hola! Quiero obtener más información."; // Mensaje predeterminado

    // URL de WhatsApp para abrir el chat con el número y mensaje
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

    // Abrir WhatsApp en una nueva ventana
    window.open(whatsappURL, "_blank");
});