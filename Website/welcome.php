<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Willkommen</title>
</head>
<body>
    <h1>Willkommen zu deiner Testwebsite!</h1>
    <p>Hier kannst du deine Website erstellen.</p>
    <a href="logout.php">Abmelden</a>
</body>
</html>
