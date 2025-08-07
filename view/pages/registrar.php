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
    <link rel="stylesheet" href="../css/registrar.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/footer.css">
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

        <form action="" class="formulario" method="post">

            <h2>Registrarse</h2>

            <input type="text" name="nombre" placeholder="Nombre...">

            <input type="text" name="apellido" placeholder="Apellido...">

            <input type="number" name="telefono" placeholder="Telefono...">

            <input type="text" name="direccion" placeholder="Dirección...">

            <input type="email" name="email" placeholder="Correo Electronico...">

            <input type="password" name="password" placeholder="Contraseña...">

            <input type="submit" name="ingreso" value="Registrar">

        </form>

    </main>
    <footer class="footer">
        <div class="footer-content">
        <div class="footer-logo">
            <img src="../img/global-img/logo.png" alt="Logo Circula">
        </div>
        <nav class="footer-links">
            <a href="../../index.php">Inicio</a>
            <a href="../pages/explorar.php">Explorar</a>
            <a href="../pages/inventario.php">Inventario</a>
            <a href="../pages/contacto.php">Contacto</a>
        </nav>
        <div class="footer-socials">
            <a href="#" title="Facebook"><img src="../img/icon-menu/facebook.png" alt="Facebook"></a>
            <a href="#" title="Twitter"><img src="../img/icon-menu/twitter.png" alt="Twitter"></a>
            <a href="#" title="Instagram"><img src="../img/icon-menu/instagram.png" alt="Instagram"></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2025 Circula. Todos los derechos reservados.</p>
    </div>
</footer>
    <?php 
    include ("../../controller/conexionBD.php");
    include ("../../model/registro.php");
    ?>
</body>

</html>