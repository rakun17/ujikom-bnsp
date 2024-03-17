<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['kd_skema'])) {
    $kd_skema = $_GET['kd_skema'];
    $sql = "DELETE FROM Skema WHERE Kd_skema='$kd_skema'";
    if ($conn->query($sql) === TRUE) {
        header("Location: sertifikasi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Kode skema tidak ditemukan";
    exit();
}

$conn->close();
?>
