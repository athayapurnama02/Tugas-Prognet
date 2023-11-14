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
            <a href="/">>> Back to Homepage <<</a>
        </div>
        <h1>Hasil Biodata</h1>
        <div class="center-button">
        <form action="/biodata/create" method="get">
            <button type="submit">New Biodata</button>
        </form>
        </div>
        <table>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tanggal</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $biodata)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $biodata->nim }}</td>
                <td>{{ $biodata->nama }}</td>
                <td>{{ $biodata->umur }}</td>
                <td>{{ $biodata->tanggal }}</td>
                <td>{{ $biodata->alamat }}</td>
                <td>{{ $biodata->telepon }}</td>
                <td>
                    <form action="/biodata/{{ $biodata->id }}/edit" method="get">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="/biodata/{{ $biodata->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>