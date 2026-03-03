<?php
// Detectar si estamos en Clever Cloud
if (getenv("MYSQL_ADDON_HOST")) {
    // Configuración en Clever Cloud
    $host = getenv("MYSQL_ADDON_HOST");
    $user = getenv("MYSQL_ADDON_USER");
    $pass = getenv("MYSQL_ADDON_PASSWORD");
    $db = getenv("MYSQL_ADDON_DB");
} else {
    // Configuración local (XAMPP)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "nombre_de_tu_base"; // CAMBIAR
}
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>