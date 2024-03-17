<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman HOME</title>
    <style>
        body {
            background-color: #D6F6C6 ; /* Warna latar belakang */
            font-family: Arial, sans-serif; /* Jenis font */
            color: #333; /* Warna teks */
            max-width: 800px; /* Lebar maksimum konten */
            margin: 0 auto; /* Atur margin secara otomatis untuk posisi tengah */
            padding: 20px; /* Padding agar konten tidak terlalu dekat dengan tepi */
        }
        
        h1 {
            color: #F72A0A; /* Warna teks merah */
            text-align: center; /* Teks rata tengah */
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px; /* Margin bawah untuk memberikan jarak antara tabel dan tombol */
        }
        
        table, th, td {
            border: 1px solid #0E0D0D ; /* Warna border hitam */
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
        }
        
        input[type="text"], button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button {
            background-color: #4CE400; /* Warna tombol Hijau */
            color: white; /* Warna teks putih */
        }
        
        button:hover {
            background-color: #0056b3; /* Warna tombol biru saat hover */
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
        footer {
            text-align: center;
            margin-top: 20px; /* Jarak dari konten utama */
            font-style: italic;
            color: #888; /* Warna teks abu-abu */
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Sertifikasi</h1>

    <!-- Form Pencarian -->
    <form action="home.php" method="GET">
        <label for="search">Cari Peserta:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Cari</button>
        <a href="sertifikasi.php"><button type="button">Sertifikasi</button></a>
    </form>
    </form>
    

    <?php
    // Include file koneksi
    include 'koneksi.php';

    // Proses pencarian
    if(isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM Peserta WHERE Nm_peserta LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM Peserta";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>No</th>
                    <th>Kode Skema</th>
                    <th>Nama Peserta</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                </tr>";
        
        // Deklarasi variabel untuk nomor urut
        $nomor_urut = 1;

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$nomor_urut."</td>
                    <td>".$row["Kd_skema"]."</td>
                    <td>".$row["Nm_peserta"]."</td>
                    <td>".$row["Jekel"]."</td>
                    <td>".$row["Alamat"]."</td>
                    <td>".$row["No_hp"]."</td>
                </tr>";
            $nomor_urut++; // Tingkatkan nomor urut setiap kali mengeluarkan baris
        }
        echo "</table>";
    } else {
        echo "Tidak ada data peserta";
    }

    $conn->close();
    ?>

    <!-- Navigasi Menu ke Form Pendaftaran Sertifikasi -->
    <div class="form-button">
        <a href="form_pendaftaran.php"><button>Tambah Peserta</button></a>
    </div>

    <footer>
        Tugas Praktek Demontrasi - Rangga Ari sandi || 2024
    </footer>
</body>
</html>
