<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circula || Explorar</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/inventario.css">
</head>

<body>
    <header>
        <img src="../img/global-img/logo.png" alt="" class="logo">
        <nav class="menu">
            <a href="../../index.php"> <img class="icon" src="../img/icon-menu/apartment.png" alt="">Inicio</a>
            <a href="explorar.php"><img class="icon" src="../img/icon-menu/search.png" alt="">Explorar</a>
            <a href="inventario.php"> <img class="icon" src="../img/icon-menu/recycle.png" alt="">Inventario</a>
            <a href="contacto.php"> <img class="icon" src="../img/icon-menu/charlando.png" alt=""> Contacto</a>
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
        <div class="welcome">
            <h1>Bienvenido a tu inventario</h1>
            <h3>Aquí podras añadir tus objetos para poder intercambiarlos con alguien...</h3>
        </div>
        <div class="contenido-inventario">
            <div class="objeto">
                <div class="img-card">
                    <img src="../img/gato.jpg" alt="">
                </div>
                <div class="info-card">
                    <h2>Chocolate Casero</h2>
                    <h4>Buenos Aires, La matanza.</h4>
                    <h4><span>Envio </span>Gratis</h4>
                    <div class="precio-boton">
                        <h3>100000$</h3>
                        <a href="producto.html"><img src="../img/inventario-img/expandir.png" alt="" width="30px"></a>
                    </div>
                </div>
            </div>
            <div class="añadir-objeto">
                <input type="submit" value="Añadir Objeto +">
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>