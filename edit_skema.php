<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['kd_skema'])) {
    $kd_skema = $_GET['kd_skema'];
    $sql = "SELECT * FROM Skema WHERE Kd_skema = '$kd_skema'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data skema tidak ditemukan";
        exit();
    }
} else {
    echo "Kode skema tidak ditemukan";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skema Sertifikasi</title>
</head>
<body>
    <h1>Edit Skema Sertifikasi</h1>
    <form action="proses_edit_skema.php" method="POST">
        <input type="hidden" name="kd_skema" value="<?php echo $row['Kd_skema']; ?>">
        <label for="nm_skema">Nama Skema:</label>
        <input type="text" id="nm_skema" name="nm_skema" value="<?php echo $row['Nm_skema']; ?>" required>
        <label for="jenis">Jenis Skema:</label>
        <select id="jenis" name="jenis" required>
            <option value="KKNI" <?php if ($row['Jenis'] == 'KKNI') echo 'selected'; ?>>KKNI</option>
            <option value="Klaster" <?php if ($row['Jenis'] == 'Klaster') echo 'selected'; ?>>Klaster</option>
        </select>
        <label for="jml_unit">Jumlah Unit:</label>
        <input type="number" id="jml_unit" name="jml_unit" value="<?php echo $row['Jml_unit']; ?>" required>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
