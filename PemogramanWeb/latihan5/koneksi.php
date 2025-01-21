<?php
$mysqli = new mysqli ("localhost", "root", "", "Mahasiswa");

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}