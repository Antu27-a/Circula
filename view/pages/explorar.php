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
    <link rel="stylesheet" href="../css/explorar.css">
</head>

<body>
    <header>
        <img src="../img/global-img/logo.png" alt="" class="logo">
        <nav class="menu">

            <a href="../../index.php"><span class="nav-a"><img class="icon" src="../img/icon-menu/apartment.png" alt="">Inicio</span></a>
            <a href="explorar.php"><span class="nav-a"><img class="icon" src="../img/icon-menu/search.png" alt="">Explorar</span></a>
            <a href="inventario.php"><span class="nav-a"><img class="icon" src="../img/icon-menu/recycle.png" alt="">Inventario</span></a>
            <a href="contacto.php"><span class="nav-a"><img class="icon"src="../img/icon-menu/charlando.png" alt=""> Contacto</span></a>


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

        <h1>Explorar</h1>
        <p>Esta página está en construcción.</p>
        <p>Pronto podrás usar filtros y demas</p>

    </main>
    <footer>

    </footer>
</body>

</html>