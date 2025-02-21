<?php
$servername = "db";
$username = "server_admin";
$password = "adminpassword";
$database = "server_management";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>
