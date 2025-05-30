<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circula || Explorar</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/registrar.css">
</head>

<body>
    <header>
        <img src="../img/global-img/logo.png" alt="" class="logo">
        <nav class="menu">
            <a href="../../index.html"> <img class="icon" src="view/img/global-img/home-icon-silhouette.png" alt="">
                Inicio</a>
            <a href="explorar.html"><img class="icon" src="view/img/global-img/magnifying-glass.png" alt="">Explorar</a>
            <a href="donar.html">Inventario</a>
            <a href="contacto.html"> <img class="icon" src="view/img/global-img/chatting.png" alt=""> Contacto</a>
        </nav>
        <div class="login">
            <a href="login.php" class="btn-login">Iniciar Sesión</a>
            <a href="registrar.php" class="btn-registrarse">Registrarse</a>
        </div>
    </header>
    <main>

        <form action="" class="formulario" method="post">

            <h2>Iniciar Sesion</h2>

            <input type="text" name="email" placeholder="Correo Electronico...">

            <input type="text" name="password" placeholder="Contraseña...">

            <input type="submit" name="ingresar" value="Iniciar Sesion">

            
        </form>

    </main>
    <footer>

    </footer>
    <?php 
    include("../../controller/conexionBD.php");
    include("../../model/login.php");
    ?>
</body>

</html>