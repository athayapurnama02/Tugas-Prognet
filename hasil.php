<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>List of Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="form_biodata.html">>> Back to Form <<</a>
        </div>
        <h1>List of Biodata</h1>

        <?php
        

        include 'koneksi.php';

        if (isset($_POST['insert'])) {
            $nim = $_POST["nim"];
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

            $sql = "INSERT INTO tb_biodata (nim, nama, umur, jk, tanggal, alamat, pendidikan, hobi, email, password, telepon, waktu, warna, nilai) 
                    VALUES ('$nim', '$nama', '$umur', '$jk', '$tanggal', '$alamat', '$pendidikan', '$hobi', '$email', '$password', '$telepon', '$waktu', '$warna', '$nilai')";

            if ($conn->query($sql) === TRUE) {
                echo "Data telah berhasil dimasukkan ke dalam database.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $sql = "SELECT nim, nama FROM tb_biodata";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>NIM</th><th>Nama</th><th>Action</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['nim']}</td><td>{$row['nama']}</td>";
                echo "<td><a href='detail.php?id={$row['id']}'>Detail</a> | ";
                echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
                echo "<a href='delete.php?id={$row['id']}'>Delete</a></td></tr>";
            }
            echo '</table>';
        } else {
            echo "No data available.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
