<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circula || Home</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="view/css/global.css">
    <link rel="stylesheet" href="view/css/index.css">
    <!-- Estilos CSS -->
    <link rel="icon" href="view/img/global-img/Circula-icon.png" type="image/x-icon">
</head>

<body>
    <header>
        <img src="view/img/global-img/logo.png" alt="" class="logo">
        <nav class="menu">

            <a href="index.php"><span class="nav-a"><img class="icon" src="view/img/icon-menu/apartment.png" alt="">Inicio</span></a>
            <a href="view/pages/explorar.php"><span class="nav-a"><img class="icon" src="view/img/icon-menu/search.png" alt="">Explorar</span></a>
            <a href="view/pages/inventario.php"><span class="nav-a"><img class="icon" src="view/img/icon-menu/recycle.png" alt="">Inventario</span></a>
            <a href="view/pages/contacto.hp"><span class="nav-a"><img class="icon"src="view/img/icon-menu/charlando.png" alt=""> Contacto</span></a>


        </nav>
        <div class="login">
            <?php
            if (isset($_SESSION['usuario'])) {
                // Usuario logueado
                echo "<a href='model/logout.php' class='btn-login'>Cerrar sesión</a>";
            } else {
                // Usuario invitado
                echo "<a href='view/pages/login.php' class='btn-login'>Iniciar sesión</a>";
                echo "<a href='view/pages/registrar.php' class='btn-registrarse'>Registrarse</a>";
            }
            ?>
            <!-- <a href="view/pages/login.php" class="btn-login">Iniciar Sesión</a> -->
            <!-- <a href="view/pages/registrar.php" class="btn-registrarse">Registrarse</a> -->
        </div>
    </header>
    <main>

        <div class="presentacion">
            <h1><span class="resaltar">Juntos</span> hacemos <span class="resaltar">circular </span>los <span
                    class="resaltar">objetos </span>no el desperdicio,</h1>
            <h3>Una plataforma donde puedes dar nueva vida a tus objetos y encontrar lo que necesitas sin gastar dinero.
            </h3>
            <input type="button" value="Explorar" class="btn-presentacion">
        </div>

        <div class="info">
            <h2 class="titulo">¿Por qué usar Circula?</h2>
            <div class="features">
                <div class="card">
                    <div class="iconn"><img src="view/img/global-img/actualizar.png" alt=""></div>
                    <h3>Sin dinero</h3>
                    <p>Intercambia objetos sin necesidad de usar dinero.</p>
                </div>
                <div class="card">
                    <div class="iconn"><img src="view/img/global-img/seguridad-activada.png" alt=""></div>
                    <h3>Seguro</h3>
                    <p>Sistema de reputación y consejos para intercambios seguros.</p>
                </div>
                <div class="card">
                    <div class="iconn"><img src="view/img/global-img/regalo.png" alt=""></div>
                    <h3>Solidario</h3>
                    <p>Dona objetos que ya no usas a quien los necesita.</p>
                </div>
                <div class="card">
                    <div class="iconn"><img src="view/img/global-img/ubicacion.png" alt=""></div>
                    <h3>Local</h3>
                    <p>Conecta con personas de tu zona para facilitar los intercambios.</p>
                </div>
            </div>
        </div>

        <div class="empezar">
            <h1 class="titulo">¿Cómo empezar?</h1>
            <div class="pasos">
                <div class="paso">
                    <div class="numero">1</div>
                    <h3>Regístrate</h3>
                    <p>Crea tu cuenta gratis en menos de un minuto.</p>
                    <a href="#" class="boton">Crear cuenta</a>
                </div>
                <div class="paso">
                    <div class="numero">2</div>
                    <h3>Publica tus objetos</h3>
                    <p>Sube fotos y describe los objetos que quieres intercambiar o donar.</p>
                    <a href="#" class="boton">Registrarse para publicar</a>
                </div>
                <div class="paso">
                    <div class="numero">3</div>
                    <h3>Explora y contacta</h3>
                    <p>Busca objetos que te interesen y contacta con sus dueños.</p>
                    <a href="#" class="boton">Explorar objetos</a>
                </div>
            </div>
        </div>



        <!-- Sección principal de objetos -->
        <section class="seccion-objetos">

            <h2 class="titulo">Objetos disponibles</h2>
            <div class="contenedor-tarjetas">
                <!-- <div class="tarjeta">
                    <img src="view/img/Linea Palo Santo - Sagrada Madre.jpg" alt="">
                    <span class="etiqueta gratis">Gratis</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>
                        <div class="descripcion-corta">
                            Descripción breve del objeto, características principales y estado de...
                        </div>
                        <div class="descripcion-completa">
                            Descripción breve del objeto, características principales y estado del objeto. Aquí se
                            muestra más información útil y detallada para el usuario.
                        </div>
                        <div class="estrellas">☆ (12)</div>
                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <img src="view/img/Palo Santo con Violetas.jpg" alt="">
                    <span class="etiqueta intercambio">Intercambio</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>
                        <div class="descripcion-corta">
                            Descripción breve del objeto, características principales y estado de...
                        </div>
                        <div class="descripcion-completa">
                            Descripción breve del objeto, características principales y estado del objeto. Aquí se
                            muestra más información útil y detallada para el usuario.
                        </div>
                        <div class="estrellas">☆ (12)</div>
                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <img src="view/img/gato.jpg" alt="">
                    <span class="etiqueta donacion">Donacion</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>
                        <div class="descripcion-corta">
                            Descripción breve del objeto, características principales y estado de...
                        </div>
                        <div class="descripcion-completa">
                            Descripción breve del objeto, características principales y estado del objeto. Aquí se
                            muestra más información útil y detallada para el usuario.
                        </div>
                        <div class="estrellas">☆ (12)</div>
                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div> -->
                <div class="tarjeta">
                    <img class="imagen" src="view/img/gato.jpg" alt="">
                    <span class="etiqueta donacion">Donacion</span>

                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>

                        <div class="descripcion-corta">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles...
                        </div>

                        <div class="descripcion-completa">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles por el uso.


                            <div class="detalles-extra">
                                <p><strong>Valor est.: $200</strong></p>
                                <p><strong>Condición:</strong> Usado</p>
                                <p><strong>Publicado:</strong> Hace 1 semana</p>
                                <p><strong>Vendedor:</strong> Martín S.
                                    <span class="estrellas">⭐⭐⭐✰✰</span>
                                    <span class="confiable">Confiable</span>
                                </p>
                            </div>
                            <div class="bloque-sesion">
                                <p>Iniciá sesión para contactar al dueño</p>
                                <a href="#" class="boton">Iniciar sesión</a>
                            </div>

                        </div>

                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>


                <div class="tarjeta">
                    <img class="imagen" src="view/img/gato.jpg" alt="">
                    <span class="etiqueta gratis">Gratis</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>

                        <div class="descripcion-corta">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles...
                        </div>

                        <div class="descripcion-completa">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles por el uso.


                            <div class="detalles-extra">
                                <p><strong>Valor est.: $200</strong></p>
                                <p><strong>Condición:</strong> Usado</p>
                                <p><strong>Publicado:</strong> Hace 1 semana</p>
                                <p><strong>Vendedor:</strong> Martín S.
                                    <span class="estrellas">⭐⭐⭐✰✰</span>
                                    <span class="confiable">Confiable</span>
                                </p>
                            </div>
                            <div class="bloque-sesion">
                                <p>Iniciá sesión para contactar al dueño</p>
                                <a href="#" class="boton">Iniciar sesión</a>
                            </div>

                        </div>

                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <img class="imagen" src="view/img/gato.jpg" alt="">
                    <span class="etiqueta gratis">Gratis</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>

                        <div class="descripcion-corta">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles...
                        </div>

                        <div class="descripcion-completa">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles por el uso.


                            <div class="detalles-extra">
                                <p><strong>Valor est.: $200</strong></p>
                                <p><strong>Condición:</strong> Usado</p>
                                <p><strong>Publicado:</strong> Hace 1 semana</p>
                                <p><strong>Vendedor:</strong> Martín S.
                                    <span class="estrellas">⭐⭐⭐✰✰</span>
                                    <span class="confiable">Confiable</span>
                                </p>
                            </div>
                            <div class="bloque-sesion">
                                <p>Iniciá sesión para contactar al dueño</p>
                                <a href="#" class="boton">Iniciar sesión</a>
                            </div>

                        </div>

                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <img class="imagen" src="view/img/gato.jpg" alt="">
                    <span class="etiqueta intercambio">Intercambio</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>

                        <div class="descripcion-corta">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles...
                        </div>

                        <div class="descripcion-completa">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles por el uso.


                            <div class="detalles-extra">
                                <p><strong>Valor est.: $200</strong></p>
                                <p><strong>Condición:</strong> Usado</p>
                                <p><strong>Publicado:</strong> Hace 1 semana</p>
                                <p><strong>Vendedor:</strong> Martín S.
                                    <span class="estrellas">⭐⭐⭐✰✰</span>
                                    <span class="confiable">Confiable</span>
                                </p>
                            </div>
                            <div class="bloque-sesion">
                                <p>Iniciá sesión para contactar al dueño</p>
                                <a href="#" class="boton">Iniciar sesión</a>
                            </div>

                        </div>

                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <img class="imagen" src="view/img/gato.jpg" alt="">
                    <span class="etiqueta intercambio">Intercambio</span>
                    <button class="btn-favorito" title="Agregar a favoritos">♡</button>
                    <div class="contenido">
                        <h3>Nombre del objeto 1</h3>
                        <p class="ubicacion">📍 Ciudad, Barrio</p>

                        <div class="descripcion-corta">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles...
                        </div>

                        <div class="descripcion-completa">
                            Mesa de comedor de madera maciza para 6 personas. En buen estado, solo tiene algunos
                            detalles por el uso.


                            <div class="detalles-extra">
                                <p><strong>Valor est.: $200</strong></p>
                                <p><strong>Condición:</strong> Usado</p>
                                <p><strong>Publicado:</strong> Hace 1 semana</p>
                                <p><strong>Vendedor:</strong> Martín S.
                                    <span class="estrellas">⭐⭐⭐✰✰</span>
                                    <span class="confiable">Confiable</span>
                                </p>
                            </div>
                            <div class="bloque-sesion">
                                <p>Iniciá sesión para contactar al dueño</p>
                                <a href="#" class="boton">Iniciar sesión</a>
                            </div>

                        </div>

                        <button class="btn-detalles">Ver detalles</button>
                    </div>
                </div>



        </section>


        <div class="boton-centro">
            <button class="btn-ver-mas">Ver más objetos</button>
        </div>

        <section class="Info-reputacion">
            <div class="reput-info">
                <!-- COLUMNA IZQUIERDA -->
                <div class="contenedor-textos">
                    <h2 class="titulo">Sistema de reputación</h2>
                    <p class="subtitulo">En Circula, la confianza es fundamental. Nuestro sistema de reputación
                        obligatorio ayuda a identificar a los usuarios más confiables.</p>

                    <div class="item-reputacion">
                        <img src="view/img/reputacion-img/estrella-medio-vacia.png" alt="icono estrella">
                        <div class="texto">
                            <h3>Valoraciones transparentes</h3>
                            <p>Cada interacción recibe una valoración que construye la reputación del usuario.</p>
                        </div>
                    </div>

                    <div class="item-reputacion">
                        <img src="view/img/reputacion-img/advertir.png" alt="icono advertencia">
                        <div class="texto">
                            <h3>Usuarios destacados</h3>
                            <p>Los usuarios con mejores valoraciones se destacan como más confiables.</p>
                        </div>
                    </div>

                    <div class="item-reputacion">
                        <img src="view/img/reputacion-img/regaloo.png" alt="icono regalo">
                        <div class="texto">
                            <h3>Beneficios por reputación</h3>
                            <p>Accede a funciones exclusivas a medida que mejora tu reputación.</p>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA DERECHA -->
                <div class="imagen-reputacion">
                    <img src="view/img/Palo Santo con Violetas.jpg" alt="Imagen reputación">
                </div>
            </div>
        </section>


        <section class="banner-invitar">
            <h2 class="tituloR">¿Listo para unirte a la economia Circula?</h2>
            <div class="invitar-info">
                <p>Comienza a donar,intercambiar o encotrar objetos gratis hoy mismo. Juntos podemos reducir el consumo
                    excesivo y fomentar a la reutilización. </p>

            </div>
            <a href="#" class="boton-registrar">Registrate ahora </a>
        </section>

        <script src="view/js/tarjetas.js"></script>

    </main>
</body>

</html>