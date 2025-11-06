<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--este permite que sea reponsive 1er hace que se adapte al ancho real de dispo y 2da indica que no se aplica zoom inicial, mostrando al 100% -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!-- para loss iconos -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
            <link rel="stylesheet" href="css/base.css">
            <link rel="stylesheet" href="css/navbar.css">
            <link rel="stylesheet" href="css/redes.css">
            <link rel="stylesheet" href="css/subida.css">
            <link rel="stylesheet" href="css/responsive.css">
            <link rel="stylesheet" href="css/subirarchivo.css">
            <link rel="stylesheet" href="css/bannerCarrusel.css">
            

        <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap');
    
        </style>
    
    </head>
    <body>
        <nav class=" navbar">
            <div class="logo">
                
                <img src="logoc.jpeg" alt="logo" style="height: 90px; width: auto;">
            </div>    
            <ul class=" nav-links">
                <li><a href="index.php" >Inicio </a></li>
                <li><a href="catalogo.php" >Catalogo </a></li>
                <div class="link-subida">
                        <button class="boton-subida" onclick="subirarchivo()">Subir archivo</button>
                            <div id="opcionesSubida" class="opciones-subida" style="display: none;" >
                            <a href="https://wa.me/qr/ELR4HUQY6VIUG1" target="_blank"> Subir por WhatsApp </a>
                                <button onclick="subirPorPagina()">Subir por la Página</button>
                            </div>

                </div>
                
                <li class="dropdown">
                        <span class="dropbtn">Servicios ▾</span>
                        <ul class="dropdown-content">
                        <li>🖨️ Impresiones y copias</li>
                        <li> 📄 Plastificados</li>
                        <li>📠 Escaneos</li>
                        <li >💳 Cargas virtuales</li>
                        <li >🧾 Pagos de servicios</li>
                        <li >🎨 Diseños personalizados</li>
                        <li >📱 Trámites online</li>
                        </ul>
                </li>
    
            </ul>
        </nav>
        <script>
            function subirarchivo() {
            const menu = document.getElementById("opcionesSubida");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
            }

            function subirPorPagina() {
    
            window.open("subirarchivo.php", "_blank");
            }

  // Cierra el menú si se hace clic fuera
            document.addEventListener("click", function(event) {
            const menu = document.getElementById("opcionesSubida");
            const boton = document.querySelector(".boton-subida");
            if (!menu.contains(event.target) && !boton.contains(event.target)) {
            menu.style.display = "none";
            }
            });
        </script>

        <div class="banner">
            <h2>Impresiones Rapidas y de Calidad</h2>
            <p>Sube tus archivos y recoge tus Impresiones en minutos.¡Simple, rapido y profesional!</p>
            <div class="botones-subida">
                <a href="https://wa.me/qr/ELR4HUQY6VIUG1" target="_blank" class="btn-wapp">
                <i class="fab fa-whatsapp"></i> Subir por WhatsApp
                </a>

                <a href="subirarchivo.php" class="btn-pagina">
                <i class="fas fa-upload"></i> Subir por la Página
                </a>
            </div>


        </div>
        <!-- Contenedor principal del carrusel -->
        <div class="swiper mySwiper w-full max-w-2xl  mx-auto mb-8">
            <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <img src="imagenes/imagen4.jpeg" alt="Descripción 1" class="w-full h-full object-contain rounded-lg"/>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/imagen5.jpeg" alt="Descripción 2" class="w-full h-full object-contain rounded-lg" />
            </div>
            <div class="swiper-slide">
                    <img src="imagenes/imagen2.jpeg" alt="Descripción 3" class="w-full h-full object-contain rounded-lg" />
            </div>
        </div>

        <!-- Botones de navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

            <!-- Paginación -->
        <div class="swiper-pagination"></div>
        </div>
    <script>
            const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>

        <div class="barra-redes">
            <a href="https://wa.me/qr/ELR4HUQY6VIUG1" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/people/CayLu-Impresiones/61558192714812/" target="_blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.google.com.ar/maps/place/CAyLU+-+Kiosco+e+Impresiones/@-24.2310633,-64.8670783,17z/data=!3m1!4b1!4m6!3m5!1s0x941a590f17568167:0x5f73075c006ec9cc!8m2!3d-24.2310633!4d-64.8645034!16s%2Fg%2F11s5c86t3s?hl=es&entry=ttu&g_ep=EgoyMDI1MTAxNC4wIKXMDSoASAFQAw%3D%3D" class="ubicacion"><i class="fa-regular fa-map"></i></a>
            <a href="caylu.impresiones@gmail.com" class="gmail"> <i class="fas fa-envelope"></i> </a>
        </div>


        



        <footer class="bg-gray-950 text-gray-300 py-10">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

    <!-- Sección: Logo y descripción -->
        <div>
            <h2 class="text-white font-bold text-2xl mb-3">CayLu-Impresiones </h2>
            <p class="text-sm leading-relaxed">
                Tu solución rápida y confiable para impresiones de calidad.
            </p>
        </div>
    <!-- Sección: Enlaces rápidos -->
        <div>
        <h3 class="text-white font-semibold text-lg mb-3">Enlaces Rápidos</h3>
        <ul class="space-y-2 text-sm">
            <li><a href="index.html" class="hover:text-white transition">Inicio</a></li>
            <li><a href="catalogo.html" class="hover:text-white transition">Catálogo</a></li>
            <li><a href="subirarchivo.html" class="hover:text-white transition">Subir Archivo</a></li>
            <li><a href="#" class="hover:text-white transition">Servicios</a></li>
        </ul>
        </div>
    <!-- Sección: Contacto -->
        <div>
        <h3 class="text-white font-semibold text-lg mb-3">Contacto</h3>
        <ul class="space-y-2 text-sm">
        <li class="flex items-center gap-2">
            <i class="fa-solid fa-location-dot text-blue-400"></i>
            <span>Calle 9 de Julio N°373</span>
        </li>
        <li class="flex items-center gap-2">
            <i class="fa-solid fa-phone text-blue-400"></i>
            <span>3888-523-080</span>
        </li>
        <li class="flex items-center gap-2">
            <i class="fa-solid fa-envelope text-blue-400"></i>
            <span>caylu.impresiones@gmail.com</span>
        </li>
        </ul>
        </div>
    <!-- Sección: Horario -->
        <div>
        <h3 class="text-white font-semibold text-lg mb-3">Horario</h3>
        <ul class="space-y-2 text-sm">
            <li><i class="fa-regular fa-clock text-blue-400 mr-2"></i>Lunes - Viernes: 7am - 12:30pm</li>
            <li><i class="fa-regular fa-clock text-blue-400 mr-2"></i>Sábado: 9am - 12pm</li>
        </ul>
        </div>
    </div>
    <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-400">
    </div>
</footer>
<body>

</html>   