<?php
        include 'koneksi.php';

        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $tanggal = $_POST['tanggal'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];

            $q_input = "INSERT INTO tb_biodata (nim, nama, umur, tanggal, alamat, telepon) 
                    VALUES ('$nim', '$nama', '$umur', '$tanggal', '$alamat', '$telepon')";

            $sql = mysqli_query($conn, $q_input);

            if (!$sql) {
                echo "<script type='text/javascript'>alert('Data gagal disimpan!');</script>" . mysqli_error($conn);
            }
        }

        if (isset($_POST['edit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $tanggal = $_POST['tanggal'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];

            $q_edit = "UPDATE tb_biodata SET nama = '$nama', umur = '$umur', tanggal = '$tanggal', alamat = '$alamat', telepon='$telepon' WHERE nim = '$nim'";

            $sql = mysqli_query($conn, $q_edit);

            if (!$sql) {
                echo "<script type='text/javascript'>alert('Data gagal disimpan!');</script>" . mysqli_error($conn);
            }
        }

        if (isset($_POST['hapus'])) {
            $nim = $_POST['nim'];

            $q_hapus = "DELETE FROM tb_biodata WHERE nim = '$nim'";
            
            $sql = mysqli_query($conn, $q_hapus);
            if (!$sql) {
                echo "<script type='text/javascript'>alert('Data gagal dihapus!');</script>" . mysqli_error($conn);
            }
        }
?>

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
            <a href="index.html">>> Back to Home <<</a>
        </div>
        <h1>List of Biodata</h1>
        <table>
        <thead>
            <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $q_select = "SELECT * FROM tb_biodata";
        $result = mysqli_query($conn, $q_select);

        foreach ($result as $data) {
            ?>
            <tr>
                <th scope="row">
                    <?php echo $data['nim'] ?>
                </th>
                <td>
                    <?php echo $data['nama'] ?>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" name="input" data-bs-toggle="modal"
                        data-bs-target="#detailModal<?php echo $data['nim'] ?>">Details</button>
                    <button type="button" class="btn btn-warning" name="input" data-bs-toggle="modal"
                        data-bs-target="#editModal<?php echo $data['nim'] ?>">Edit</button>
                    <button type="button" class="btn btn-danger" name="input" data-bs-toggle="modal"
                        data-bs-target="#hapusModal<?php echo $data['nim'] ?>">Delete</button>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>
