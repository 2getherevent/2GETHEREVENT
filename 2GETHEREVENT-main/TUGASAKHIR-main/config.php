<?php
$host = 'localhost';         // biasanya 'localhost'
$db   = 'db_2getherevent';   // nama database
$user = 'root';              // username MySQL
$pass = '';                  // password MySQL (kosongkan kalau default)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
