<!DOCTYPE html>
<html lang="es" >
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

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/base.css">
                <link rel="stylesheet" href="css/navbar.css">
                <link rel="stylesheet" href="css/redes.css">
                <link rel="stylesheet" href="css/subida.css">
                <link rel="stylesheet" href="css/responsive.css">
                <link rel="stylesheet" href="css/catalogo.css"> 
                <link rel="stylesheet" href="css/bannerCarrusel.css">


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

  // Cierra el menú si se hace clic fuera
            document.addEventListener("click", function(event) {
            const menu = document.getElementById("opcionesSubida");
            const boton = document.querySelector(".boton-subida");
            if (!menu.contains(event.target) && !boton.contains(event.target)) {
            menu.style.display = "none";
            }
            });
        </script>



        <section class="filtros">
                <label>Categoría:
                    <select id="filtroCategoria">
                        <option value="todas">Todas</option>
                        <option value="Plastificado">Plastificado</option>
                        <option value="Impresiones">Impresiones  </option>
                        <option value="Papel Adhesivo">Papel Adhesivo</option>
                        <option value="Cartillas">Cartillas</option>
                    </select>
    </label>

        <label>Ordenar:
            <select id="filtroOrden">
                <option value="default">Por defecto</option>
                <option value="az">A-Z</option>
                <option value="za">Z-A</option>
            </select>
        </label>
    </section>

  <p class="subtitulo">Catalogo de impresiones - Calidad, creatividad y color</p>

  <section class="catalogo" id="catalogo">
    <div class="producto" data-categoria="Impresiones">
      <img src="imagenes/imagen5.jpeg" alt="Libritos para pintar">
      <div class="info">
        <h2>Libritos para pintar</h2>
        <p>Librito personalizado con su personaje favorito.</p>
        
      </div>
    </div>

    <div class="producto" data-categoria="Plastificado">
        <img src="imagenes/imagen9.jpeg" alt="Plastificado">
      <div class="info">
        <h2>Plastificado</h2>
        <p>Plastificado duradero para entregar.</p>
      
      </div>
    </div>

    <div class="producto" data-categoria="Papel Adhesivo">
        <img src="imagenes/imagen8.jpeg" alt="Papel Adhesivo">
        <div class="info">
        <h2>Papel Adhesivo</h2>
        <p>Imprime a tus personajes favoritos o lo que desees.</p>
        </div>
    </div>

     <div class="producto" data-categoria="Cartillas">
        <img src="imagenes/imagen1.jpeg" alt="Cartillas">
        <div class="info">
        <h2>Cartillas</h2>
        <p>Cartilla con impresion nitida y colores vibrantes.</p>
        </div>
    </div>
    <div class="producto" data-categoria="Cartillas">
        <img src="imagenes/imagen3.jpeg" alt="Cartillas">
        <div class="info">
        <h2>Cartillas</h2>
        <p>Impresion de cartilla con calidad.</p>
        </div>
    </div>

  </section>

  <script>
    const filtroCategoria = document.getElementById('filtroCategoria');
    const filtroOrden = document.getElementById('filtroOrden');
    const productos = document.querySelectorAll('.producto');
    const catalogo = document.getElementById('catalogo');

    // FILTRAR POR CATEGORÍA
    filtroCategoria.addEventListener('change', () => {
      const categoria = filtroCategoria.value;
      productos.forEach(prod => {
        if (categoria === 'todas' || prod.dataset.categoria === categoria) {
          prod.classList.remove('oculto');
        } else {
          prod.classList.add('oculto');
        }
      });
    });

    // ORDENAR A-Z o Z-A
    filtroOrden.addEventListener('change', () => {
      const productosArray = Array.from(productos).filter(p => !p.classList.contains('oculto'));
      const orden = filtroOrden.value;

      productosArray.sort((a, b) => {
        const nombreA = a.querySelector('h2').textContent.toLowerCase();
        const nombreB = b.querySelector('h2').textContent.toLowerCase();
        if (orden === 'az') return nombreA.localeCompare(nombreB);
        if (orden === 'za') return nombreB.localeCompare(nombreA);
        return 0;
      });

      productosArray.forEach(p => catalogo.appendChild(p));
    });
  </script>
        



    </body>
</html>