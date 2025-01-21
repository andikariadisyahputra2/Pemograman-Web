<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=mahasiswa", "root" ,"");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi ke database berhasil";
}catch (PDOException $e) {
    echo "koneksi  gagal : ". $e->getMessage();
} 
?>

<?php
//$mysqli = new mysqli("localhost", "root", "", 
//"mahasiswa"); 
//if ($mysqli->connect_error) { 
 //die("Koneksi gagal: " . $mysqli->connect_error); 
//} else { 
//echo "Koneksi ke database berhasil."; 
//}
 //?>