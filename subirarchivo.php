<!DOCTYPE html>
<?php 
require 'conexion.php';
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivo - CayLU</title>
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
                            <div id="opcionesSubida" class="opciones-subida" style="display: none;">
                            <a href="https://wa.me/5493884123456?text=Hola%20CayLU,%20quiero%20enviar%20un%20archivo%20para%20imprimir" target="_blank">
                                    Subir por WhatsApp
                                </a>
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
        </script>  
<main>
    <section class="formulario-subida" id="formularioImpresion">
        <h2>Formulario de impresión</h2>

        <form method="POST" action="procesar_pedido.php" >
            <label for="nombre">Nombre del cliente:</label>
            <input type="text" name="nombre" required />

            <label for="email">Email:</label>
            <input type="email" name="email" required />

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" required />


        <label for="faz">Tipo de impresión (faz):</label>
            <select name="faz" required>
                <option value="simple">Simple faz</option>
                <option value="doble">Doble faz</option>
            </select>
            <label for="papel">Tipo de papel:</label>
                <select name="papel" required>
                    <option value="normal">Normal</option>
                    <option value="adhesivo">Adhesivo</option>
                    <option value="fotografico">Fotográfico</option>
                    <option value="cartulina">Cartulina</option>
                </select>

        <label for="copias">Cantidad de copias:</label>
        <input type="number" name="copias" required />

        <label for="color">Tipo de impresión:</label>
        <select name="color">
                <option value="bn">Blanco y negro</option>
                <option value="color">Color</option>
        </select>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones" placeholder="Ej: imprimir solo página 2 y 3"></textarea>

        <button type="submit"> Guardar Informacion</button>
        </form>
        <?php
        if(isset($_GET['msg'])) {
            echo '<p style="color: green; font-weight: bold;">' . htmlspecialchars($_GET['msg']) . '</p>';
        }
        ?>
        <a class="drive-btn"
        href= "https://docs.google.com/forms/d/e/1FAIpQLSeIridWkRpRBrvFb9lXJiPo7I6c_HC7E8YJLx9gnW4iK7OACg/viewform?usp=header"> Subir Archivo </a>




    </section>
</main>

        <script>
            function subirarchivo() {
    const menu = document.getElementById("opcionesSubida");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
    document.getElementById("formularioImpresion").style.display = "none";
            }

            function subirPorPagina() {
                document.getElementById("formularioImpresion").style.display = "block";
            document.getElementById("opcionesSubida").style.display = "none";
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
                
                
        








        </body>
</html>