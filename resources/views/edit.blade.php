<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <title>Edit Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="/">>> Back to Homepage <<</a>
            <a href="/biodata">>> Back to BiodataList <<</a>
        </div>
        <form action="/biodata/{{ $biodata->id }}" method="post">
            @csrf
            @method('PUT')
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" readonly value="{{ $biodata->nim }}"><br>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required value="{{ $biodata->nama }}"><br>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" min="0" required value="{{ $biodata->umur }}"><br>

            <label for="tanggal">Tanggal Lahir:</label>
            <input type="date" id="tanggal" name="tanggal" required value="{{ $biodata->tanggal }}"><br>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required value="{{ $biodata->alamat }}"><br>

            <label for="telepon">Telepon:</label>
            <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,12}" required value="{{ $biodata->telepon }}"><br>

            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>
</body>
</html>