<?php
include 'koneksi.php';

// Pastikan data telah dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari form
    $kd_skema = $_POST["kd_skema"];
    $nm_peserta = $_POST["nm_peserta"];
    $jekel = $_POST["jekel"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];

    // Query SQL untuk menyimpan data ke dalam tabel peserta
    $sql = "INSERT INTO peserta (Kd_skema, Nm_peserta, Jekel, Alamat, No_hp)
            VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman home.php setelah data berhasil disimpan
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Redirect jika tidak ada data yang dikirimkan melalui metode POST
    header("Location: form_pendaftaran.php");
    exit();
}

// Tutup koneksi ke database
$conn->close();
?>
