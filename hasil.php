<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Hasil Biodata</title>
</head>
<body>
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
        if(isset($_POST["hobi"])) {
            $hobi = implode(", ", $_POST["hobi"]);
        } else {
            $hobi = ""; // Jika tidak ada yang terpilih, atur $hobi menjadi string kosong
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        $telepon = $_POST["telepon"];
        $waktu = $_POST["waktu"];
        $warna = $_POST["warna"];
        $nilai = $_POST["nilai"];

        // Menampilkan data yang diterima dari form
        echo "<p>Nama: $nama</p>";
        echo "<p>Umur: $umur tahun</p>";
        echo "<p>Jenis Kelamin: $jk</p>";
        echo "<p>Tanggal Lahir: $tanggal</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Pendidikan Terakhir: $pendidikan</p>";
        echo "<p>Hobi: $hobi</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: **** (tidak ditampilkan)</p>";
        echo "<p>Telepon: $telepon</p>";
        echo "<p>Waktu Senggang: $waktu</p>";
        echo "<p>Warna Favorit: $warna</p>";
        echo "<p>Nilai: $nilai</p>";
    }
    ?>
</body>
</html>
