<?php
// Establecer la conexión con la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "registro";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// Insertar datos en la base de datos
$sql = "INSERT INTO sesion (nombre, email, nombre_usuario, contraseña) VALUES ('$nombre', '$email', '$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
	echo "Datos insertados correctamente";
} else {
	echo "Error usuario ya esta en uso" ;
}

$conn->close();
?>