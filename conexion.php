<?php
function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "caylu";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}
?>

