<?php
// Activamos modo estricto para que los errores de mysqli se lancen como excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (!empty($_POST["ingreso"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) &&
        !empty($_POST["direccion"]) && !empty($_POST["password"]) && !empty($_POST["apellido"])) {
        // Sanitizamos y almacenamos los datos
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $apellido = $_POST["apellido"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        try {
            // Preparamos la consulta
            $stmt = $Ruta->prepare("INSERT INTO usuario(nombre, email, telefono, direccion, password, apellido) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nombre, $email, $telefono, $direccion, $password, $apellido);
            $stmt->execute();

            echo "Registrado correctamente";

        } catch (mysqli_sql_exception $e) {
            // Error 1062 = entrada duplicada (email u otro campo UNIQUE)
            if ($e->getCode() == 1062) {
                echo "El email ya está registrado";
            } else {
                echo "Error al registrar: " . $e->getMessage();
            }
        }

    } else {
        echo 'Debe completar todos los datos';
    }
}
?>

