<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Hasil Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="form_biodata.html">>> Back to Form <<</a>
        </div>
        <h1>Hasil Biodata</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data yang dikirimkan melalui form
            $nama = $_POST["nama"];
            $umur = $_POST["umur"];
            $jk = $_POST["jk"];
            $tanggal = $_POST["tanggal"];
            $alamat = $_POST["alamat"];
            $pendidikan = $_POST["pendidikan"];
            $hobi = isset($_POST["hobi"]) && is_array($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";
            $email = $_POST["email"];
            $password = $_POST["password"];
            $telepon = $_POST["telepon"];
            $waktu = $_POST["waktu"];
            $warna = $_POST["warna"];
            $nilai = $_POST["nilai"];

            // Menampilkan data dalam tabel
            echo '<table>';
            echo '<tr><th>Field</th><th>Value</th></tr>';
            echo "<tr><td>Nama</td><td>$nama</td></tr>";
            echo "<tr><td>Umur</td><td>$umur tahun</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
            echo "<tr><td>Tanggal Lahir</td><td>$tanggal</td></tr>";
            echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
            echo "<tr><td>Pendidikan Terakhir</td><td>$pendidikan</td></tr>";
            echo "<tr><td>Hobi</td><td>$hobi</td></tr>";
            echo "<tr><td>Email</td><td>$email</td></tr>";
            echo "<tr><td>Password</td><td>**** (tidak ditampilkan)</td></tr>";
            echo "<tr><td>Telepon</td><td>$telepon</td></tr>";
            echo "<tr><td>Waktu Senggang</td><td>$waktu</td></tr>";
            echo "<tr><td>Warna Favorit</td><td><div class='color-box' style='background-color: $warna;'></div></td></tr>";
            echo "<tr><td>Nilai</td><td>$nilai</td></tr>";
            echo '</table>';
        }
        ?>
    </div>
</body>
</html>
