<?php

$host = getenv("MYSQL_ADDON_HOST");
$user = getenv("MYSQL_ADDON_USER");
$db   = getenv("MYSQL_ADDON_DB");

echo "Servidor de base de datos: " . $host . "<br>";
echo "Base de datos: " . $db . "<br>";

$conn = new mysqli(
    getenv("MYSQL_ADDON_HOST"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD"),
    getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_PORT")
);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexion a la base de datos exitosa";
?>