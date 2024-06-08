<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en otro lugar
$username = "root";
$password = "";
$database = "movies";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}



// Recuperar los datos del formulario
$nombre_tarjeta = $_POST['nombre'];
$numero_tarjeta = $_POST['numero'];
$fecha_vencimiento = $_POST['fecha'];
$cvv = $_POST['cvv'];

// Recuperar el nombre de usuario de la sesión
session_start();
$nombre_usuario = $_SESSION['nombre_usuario'];

// Insertar los datos en la base de datos
$query = "INSERT INTO transacciones (id_usuario, nombre_usuario, pelicula, monto, tarjeta) VALUES ('$nombre_usuario', '$nombre_usuario', '$pelicula', '$monto', '$tarjeta')";
$result = mysqli_query($conexion, $query);

if ($result) {
    echo "Transacción exitosa. Disfruta de tu película.";
} else {
    echo "Error al procesar la transacción. Por favor, inténtalo de nuevo.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
