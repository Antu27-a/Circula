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

    <!-- Modal para añadir producto -->
    <div id="modal-objeto" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.4); justify-content:center; align-items:center; z-index:1000;">
        <form action="../../model/alta.php" method="POST" style="background:white; padding:30px; border-radius:10px; min-width:300px; display:flex; flex-direction:column; gap:15px;">
            <h2>Añadir Objeto</h2>
            <label for="">Imagen:</label>
            <input type="file" name="imagen" src="" alt="" placeholder="imagen" required>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="categoria" placeholder="Categoría" required>
            <textarea name="descripcion" placeholder="Descripción" required></textarea>
            <input type="text" name="ubicacion" placeholder="Ubicación" required>
            <div style="display:flex; gap:10px; justify-content:flex-end;">
                <button type="button" onclick="cerrarModal()">Cancelar</button>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>

    <script>
        document.querySelector('.añadir-objeto input').onclick = function() {
            document.getElementById('modal-objeto').style.display = 'flex';
        };
        function cerrarModal() {
            document.getElementById('modal-objeto').style.display = 'none';
        }
    </script>
</body>

</html>