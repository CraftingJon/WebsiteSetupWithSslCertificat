-- Stelle sicher, dass die Datenbank existiert
CREATE DATABASE IF NOT EXISTS server_management;
USE server_management;

-- Erstelle die Tabelle 'users', falls sie nicht existiert
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Füge den Admin-Benutzer nur hinzu, wenn er noch nicht existiert
INSERT INTO users (username, password)
VALUES ('admin', SHA2('admin', 256))
ON DUPLICATE KEY UPDATE password=VALUES(password);
