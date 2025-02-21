<?php
session_start();
require 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']); // Hashing wie in der DB

    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $message = "Ungültige Anmeldedaten!";
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login-Seite</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Benutzername:</label><br>
        <input type="text" name="username" required><br>
        <label>Passwort:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Anmelden</button>
    </form>
    <p><?php echo $message; ?></p>
    <p>Standard Benutzername: <b>admin</b><br>Standard Passwort: <b>admin</b></p>
</body>
</html>
