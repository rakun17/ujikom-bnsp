<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_skema = $_POST['kd_skema'];
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    $sql = "INSERT INTO Skema (Kd_skema, Nm_skema, Jenis, Jml_unit) VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit')";
    if ($conn->query($sql) === TRUE) {
        header("Location: sertifikasi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
