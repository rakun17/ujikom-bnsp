<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_skema = $_POST['kd_skema'];
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    $sql = "UPDATE Skema SET Nm_skema='$nm_skema', Jenis='$jenis', Jml_unit='$jml_unit' WHERE Kd_skema='$kd_skema'";
    if ($conn->query($sql) === TRUE) {
        header("Location: sertifikasi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
