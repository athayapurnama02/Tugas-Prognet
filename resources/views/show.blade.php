<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <title>Hasil Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="form_biodata">>> Back to Form <<</a>
            <a href="/">>> Back to Home <<</a>
        </div>
        <h1>Hasil Biodata</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Menampilkan data dalam tabel
            echo '<table>';
            echo '<tr><th>Field</th><th>Value</th></tr>';
            echo "<tr><td>NIM</td><td>$nim</td></tr>";
            echo "<tr><td>Nama</td><td>$nama</td></tr>";
            echo "<tr><td>Umur</td><td>$umur tahun</td></tr>";
            echo "<tr><td>Tanggal Lahir</td><td>$tanggal</td></tr>";
            echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
            echo "<tr><td>Telepon</td><td>$telepon</td></tr>";
            echo '</table>';
        }
        ?>
    </div>
</body>
</html>