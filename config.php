<?php
$servername = "localhost"; // XAMPP generalmente usa localhost como servidor
$username = "root";        // Usuario predeterminado en XAMPP
$password = "";            // Contraseña predeterminada en XAMPP (deje vacío)
$dbname = "mis_proyectos"; // El nombre de la base de datos que creaste en phpMyAdmin

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
