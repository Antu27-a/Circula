<?php
    if(!empty($_POST["ingresar"])){ 
        if(!empty($_POST["email"]) and !empty($_POST["password"])){
            $email=$_POST["email"];
            $password=$_POST["password"];
            $consulta = $Ruta ->query(" select * from usuario WHERE email='$email' and password='$password' ");
            if($sql=$consulta ->fetch_object()){
                header("Location:Views/pages/inicio.php");
            }
            else{
                echo 'Error en Usuario y/o Contraseña';
            }

        }
    }
?>

