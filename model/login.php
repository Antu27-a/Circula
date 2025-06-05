<?php
    if(!empty($_POST["ingresar"])){ 
        if(!empty($_POST["email"]) and !empty($_POST["password"])){
            $email=$_POST["email"];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $consulta = $Ruta ->query(" select * from usuario WHERE email='$email' and password='$password' ");
            if($sql=$consulta ->fetch_object()){
                header("Location:../../index.html");
            }
            else{
                echo 'Error en Usuario y/o Contraseña';
            }

        }
    }
?>