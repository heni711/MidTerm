<?php
$host = 'localhost';
$db = 'art_gallery';
$user = 'root'; // Update with your DB username
$pass = ''; // Update with your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
