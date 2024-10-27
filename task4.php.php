<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px; /* Lebarkan container */
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex; /* Tambahkan display flex */
            align-items: center; /* Vertically center */
        }

        label {
            width: 150px; /* Lebar label */
            margin-right: 10px; /* Spasi antara label dan input */
        }

        input[type="text"], input[type="number"], select {
            width: 100%; /* Memastikan input mengisi seluruh lebar */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            background: #e7f3fe;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        th {
            background-color: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Registrasi</h1>
        <form method="post"> <!-- Hapus action -->
            <fieldset>

                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>

                <!-- Umur -->
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="number" id="umur" name="umur" required>
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label>Gender:</label>
                    <div>
                        <input type="radio" id="laki" name="gender" value="Laki-laki" checked>
                        <label for="laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="gender" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>

                <!-- Pendidikan -->
                <div class="form-group">
                    <label for="pendidikan">Pendidikan:</label>
                    <select id="pendidikan" name="pendidikan" class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>

                <!-- Hobi -->
                <div class="form-group">
                    <label>Hobi:</label>
                    <div>
                        <input type="checkbox" id="membaca" name="hobi[]" value="Membaca Buku">
                        <label for="membaca">Membaca Buku</label>
                        <input type="checkbox" id="traveling" name="hobi[]" value="Travelling">
                        <label for="traveling">Travelling</label>
                        <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
                        <label for="olahraga">Olahraga</label>
                        <input type="checkbox" id="nonton" name="hobi[]" value="Nonton">
                        <label for="nonton">Nonton</label>
                        <input type="checkbox" id="hiking" name="hobi[]" value="Hiking">
                        <label for="hiking">Hiking</label>
                        <input type="checkbox" id="mancing" name="hobi[]" value="Mancing">
                        <label for="mancing">Mancing</label>
                    </div>
                </div>

                <!-- Tombol Daftar -->
                <div class="form-group">
                    <button type="submit" class="btn-submit">DAFTAR</button>
                </div>

            </fieldset>
        </form>

        <?php
        // Proses data formulir di halaman yang sama
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $gender = $_POST['gender'];
            $pendidikan = $_POST['pendidikan'];
            $hobi = implode(", ", $_POST['hobi']);

            echo "<div class='result'>";
            echo "<h2>Data Registrasi</h2>";
            echo "<table>";
            echo "<tr><th>Nama</th><th>Umur</th><th>Gender</th><th>Pendidikan</th><th>Hobi</th></tr>";
            echo "<tr><td>$nama</td><td>$umur tahun</td><td>$gender</td><td>$pendidikan</td><td>$hobi</td></tr>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
