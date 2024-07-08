<?php
$servername = "NIKKEN";
$username = "root";
$password = "javier123";
$dbname = "bdnikken";

// Crear conexión
$conn = new mysqli($NIKKEN, $root, $javier123, $bdnikken);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$imagen = $_POST['imagen'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO productos (nombre, descripcion, precio, categoria, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$categoria', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>
