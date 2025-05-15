<?php
    if(!empty($_POST["ingreso"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["email"]) and !empty($_POST["telefono"]) and !empty($_POST["direccion"]) and !empty($_POST["password"])and !empty($_POST["estado"])and !empty($_POST["apellido"])){
            
            $nombre=$_POST["nombre"];
            $email=$_POST["email"];
            $telefono=$_POST["telefono"];
            $direccion=$_POST["direccion"];
            $password=$_POST["password"];
            $estado=$_POST["estado"];
            $apellido=$_POST["apellido"];

            $sql= $Ruta->query("INSERT INTO usuario(nombre, email, telefono, direccion, password, estado, apellido)values('$nombre','$email','$telefono','$direccion','$password','$estado','$apellido')");
            if($sql==1){
                echo'Registrado';
            }
            else{
                echo'No se registro';
            }

        }
        else{
            echo "Datos Erroneos, Verificar el Tipo";
        }
    }
    else{
        echo 'Debe Completar los Datos';
    }
?>