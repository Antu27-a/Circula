<?php
session_start();
require_once "conexion.php";

// Verificar si el usuario está logueado
if (!isset($_SESSION['nombre'])) {
    echo "Debe iniciar sesión para dar de alta un producto.";
    exit;
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$categoria = $_POST['categoria']; // si vas a agregarlo al form
$usuario_nombre = $_SESSION['nombre'];

// Obtener id del usuario desde la base de datos
$stmt = $conexion->prepare("SELECT idusuario FROM usuario WHERE nombre = ?");
$stmt->bind_param("s", $usuario_nombre);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}

$id_usuario = $usuario['idusuario'];

// Insertar producto en la tabla (fecha_publicacion se agrega sola)
$stmt = $conexion->prepare("INSERT INTO producto (idusuario, nombre, descripcion, ubicacion, categoria) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $id_usuario, $nombre, $descripcion, $ubicacion, $categoria);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Producto añadido correctamente.";
    // redirigir si querés
} else {
    echo "Error al añadir el producto.";
}
?>
