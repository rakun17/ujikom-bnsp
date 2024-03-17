<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sertifikasi</title>
    <style>
        body {
            background-color: #D6F6C6; /* Warna latar belakang */
            font-family: Arial, sans-serif; /* Jenis font */
            color: #333; /* Warna teks */
            max-width: 800px; /* Lebar maksimum konten */
            margin: 0 auto; /* Atur margin secara otomatis untuk posisi tengah */
            padding: 20px; /* Padding agar konten tidak terlalu dekat dengan tepi */
        }
        
        h1 {
            color: #F72A0A; /* Warna teks Merah */
            text-align: center; /* Teks rata tengah */
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px; /* Margin bawah untuk memberikan jarak antara tabel dan tombol */
        }
        
        table, th, td {
            border: 1px solid #007bff; /* Warna border biru */
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        tr:nth-child(even) {
            background-color: #e7f2fa; /* Warna latar belakang baris genap */
        }
        
        form {
            margin-bottom: 20px; /* Jarak antara form dan tabel */
            text-align: center; /* Form rata tengah */
            max-width: 400px; /* Lebar maksimum form */
            margin: 0 auto; /* Posisikan form di tengah */
            background-color: #fff; /* Warna latar belakang form */
            padding: 20px; /* Padding form */
            border-radius: 10px; /* Sudut melengkung */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Bayangan */
        }
        
        input[type="text"], input[type="number"], select, button {
            padding: 10px 20px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 90%; /* Setiap elemen formulir memiliki lebar penuh */
        }
        
        button {
            color: white; /* Warna teks putih */
            border-radius: 5px;
        }

        /* Tombol Back */
        button.back {
            background-color: #ccc;
            color: #333;
            width: 20%;
        }
        
        button.add {
            background-color: #28a745; /* Warna tombol hijau */
        }

        button.edit {
            background-color: #28a745; /* Warna tombol hijau */
        }

        button.delete {
            background-color: #dc3545; /* Warna tombol merah */
        }
        
        .form-button {
            text-align: center; /* Tombol rata tengah */
        }
        
        a {
            color: #007bff; /* Warna teks biru untuk link */
            text-decoration: none; /* Hilangkan garis bawah */
        }
        
        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }

        /* Tambahkan gaya untuk memisahkan form dan tabel */
        .form-table-container {
            margin-bottom: 20px;
        }
        footer {
            text-align: center;
            margin-top: 20px; /* Jarak dari konten utama */
            font-style: italic;
            color: #888; /* Warna teks abu-abu */
        }
    </style>
</head>
<body>
    <a href="home.php"><button class="back">Back</button></a> <!-- Tombol back -->
    <h1>Manajemen Skema Sertifikasi</h1>

    <!-- Container untuk form dan tabel -->
    <div class="form-table-container">
        <!-- Form Tambah Skema -->
        <form action="proses_tambah_skema.php" method="POST">
            <label for="kd_skema">Kode Skema:</label>
            <input type="text" id="kd_skema" name="kd_skema" required>

            <label for="nm_skema">Nama Skema:</label>
            <input type="text" id="nm_skema" name="nm_skema" required>

            <label for="jenis">Jenis Skema:</label>
            <select id="jenis" name="jenis" required>
                <option value="KKNI">KKNI</option>
                <option value="Klaster">Klaster</option>
            </select>

            <label for="jml_unit">Jumlah Unit:</label>
            <input type="number" id="jml_unit" name="jml_unit" required>

            <button type="submit" class="add">Tambah Skema</button>
        </form>
    </div>

    <!-- Menampilkan Data Skema -->
    <table border='1'>
        <tr>
            <th>Kode Skema</th>
            <th>Nama Skema</th>
            <th>Jenis Skema</th>
            <th>Jumlah Unit</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Include file koneksi
        include 'koneksi.php';

        // Ambil data skema dari database
        $sql = "SELECT * FROM Skema";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["Kd_skema"]."</td>
                        <td>".$row["Nm_skema"]."</td>
                        <td>".$row["Jenis"]."</td>
                        <td>".$row["Jml_unit"]."</td>
                        <td>
                            <a href='edit_skema.php?kd_skema=".$row["Kd_skema"]."'><button class='edit'>Edit</button></a> |
                            <a href='proses_hapus_skema.php?kd_skema=".$row["Kd_skema"]."'><button class='delete'>Hapus</button></a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data skema</td></tr>";
        }
        $conn->close();
        ?>
    </table>

    <footer>
            Tugas Praktik Demontrasi - Rangga Ari sandi || 2024
    </footer>
</body>
</html>
