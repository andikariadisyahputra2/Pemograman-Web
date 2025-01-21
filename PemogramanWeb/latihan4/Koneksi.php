<?php
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=Mahasiswa", "root");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi ke database berhasil.";
// } catch (PDOException $e) {
//     echo "Koneksi gagal: " . $e->getmessage();
// }

$mysqli = new mysqli ("localhost", "root", "", "Mahasiswa");

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
} else {
    echo "Koneksi ke datbase berhasil.";
}
    ?>
    