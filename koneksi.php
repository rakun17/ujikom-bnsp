<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan dengan password MySQL Anda
$database = "db_sertifikasi"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
