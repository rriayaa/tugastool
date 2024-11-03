<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transaksi"; // Ganti dengan nama database yang kamu gunakan

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
