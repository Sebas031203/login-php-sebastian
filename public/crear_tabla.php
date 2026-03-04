<?php
$conn = new mysqli(
    getenv("MYSQL_ADDON_HOST"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD"),
    getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_PORT")
);

$sql = "CREATE TABLE usuarios (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 correo VARCHAR(100) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>