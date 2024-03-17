<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D6F6C6;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #F72A0A;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CE400 ;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-button {
            background-color: #ccc;
            color: #333;
        }
        .back-button:hover {
            background-color: #999;
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
    <h2>Form Pendaftaran Peserta</h2>
    <a href="home.php"><button class="back-button">Back</button></a> <!-- Tombol back -->
    <form action="proses_pendaftaran.php" method="POST">
        <label for="kd_skema">Skema:</label>
        <select id="kd_skema" name="kd_skema" required>
            <option value="SKM-001">Junior Web Developer</option>
            <option value="SKM-002">Digital Marketing</option>
            <option value="SKM-003">Designer Multimedia Muda</option>
            <option value="SKM-004">Network Administrator Muda</option>
        </select>

        <label for="nm_peserta">Nama Peserta:</label>
        <input type="text" id="nm_peserta" name="nm_peserta" required>

        <label for="jekel">Jenis Kelamin:</label>
        <select id="jekel" name="jekel" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="no_hp">Nomor HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>

        <button type="submit">Daftar</button>
    </form>

    <footer>
        Tugas Praktik Demontrasi - Rangga Ari sandi || 2024
    </footer>
</body>
</html>
