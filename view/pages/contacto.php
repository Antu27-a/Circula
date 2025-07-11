<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circula || Contacto</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/explorar.css">

    <link rel="stylesheet" href="../css/formulario.css">
    
</head>

<body>
    <header>
        <img src="../img/global-img/logo.png" alt="" class="logo">
        <nav class="menu">

            <a href="../../index.php"><span class="nav-a"><img class="icon" src="../img/icon-menu/apartment.png" alt="">Inicio</span></a>
            <a href="explorar.html"><span class="nav-a"><img class="icon" src="../img/icon-menu/search.png" alt="">Explorar</span></a>
            <a href="inventario.html"><span class="nav-a"><img class="icon" src="../img/icon-menu/recycle.png" alt="">Inventario</span></a>
            <a href="contacto.html"><span class="nav-a"><img class="icon"src="../img/icon-menu/charlando.png" alt=""> Contacto</span></a>


        </nav>
        <div class="login">
            <?php
            if (isset($_SESSION['usuario'])) {
                // Usuario logueado
                echo "<a href='../../model/logout.php' class='btn-login'>Cerrar sesión</a>";
            } else {
                // Usuario invitado
                echo "<a href='login.php' class='btn-login'>Iniciar sesión</a>";
                echo "<a href='registrar.php' class='btn-registrarse'>Registrarse</a>";
            }
            ?>
            <!-- <a href="login.php" class="btn-login">Iniciar Sesión</a> -->
            <!-- <a href="registrar.php" class="btn-registrarse">Registrarse</a> -->
        </div>
    </header>
    <main>

        <section class="contacto" id="contacto">
            <h2 >Contacto</h2>
            <p>Estamos para responder tus consultas</p>

            <div class="contacto-wrapper">
                <!-- Tarjeta de información -->
                <div class="card info-card">
                    <h3 class="titulo">Sobre Circula</h3>
                    <p>
                        Circula es una plataforma que conecta personas para <strong> intercambiar, donar o regalar objetos</strong>,
                        servicios y experiencias. Promovemos el consumo consciente, la solidaridad y la economía
                        circular.
                    </p>

                    <h3 class="titulo">Contacto</h3>
                    <p><i class="fas fa-envelope"></i> Circula@gmail.com</p>

                    <h3 class="titulo">Redes Sociales</h3>
                    <p>
                        Seguinos para enterarte de novedades, publicaciones y propuestas de la comunidad:
                        <br>
                        <a href="https://www.instagram.com/tecnica1mg/" target="_blank">
                            <img class="icon" src="../img/global-img/logotipo-de-instagram.png" alt="Instagram"
                                title="Instagram">
                        </a>
                    </p>
                </div>


                <!-- Tarjeta de formulario -->
                <div class="card form-card">
                    <form class="formularioc" id="contact-form">
                        <input type="text" name="nombre" placeholder="Nombre completo" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="asunto" placeholder="Asunto" required>
                        <textarea name="mensaje" placeholder="Mensaje" rows="5" required></textarea>
                        <button type="submit"><span>Enviar mensaje</span></button>
                    </form>
                </div>
            </div>
        </section>

   
    </main>
    <footer>

    </footer>
</body>

</html>