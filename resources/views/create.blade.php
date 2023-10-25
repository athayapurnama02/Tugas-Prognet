<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <title>Form Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="/">>> Back to Home <<</a>
        </div>
    <h1>Form Biodata</h1>
    <form id="biodataForm" onsubmit="return validateForm()" action="hasil_biodata" method="get">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" min="0" required><br>

        <label for="tanggal">Tanggal Lahir:</label>
        <input type="date" id="tanggal" name="tanggal" required><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br>

        <label for="telepon">Telepon:</label>
        <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,12}" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <script src="{{ asset('js/script.js') }}"></script>
    </div>
</body>
</html>