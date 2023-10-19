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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>List of Biodata</title>
</head>

<body>
    <div class="container-fluid">
        <div class="cardcol-12 m-auto mt-5 w-75 shadow p-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">List of Biodata</h5>
                <table class="mt-3 table table-striped">
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
                                        data-bs-target="#detailModal<?php echo $data['id'] ?>">Details</button>
                                    <button type="button" class="btn btn-warning" name="input" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo $data['id'] ?>">Edit</button>
                                    <button type="button" class="btn btn-danger" name="input" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal<?php echo $data['id'] ?>">Delete</button>
                                </td>
                            </tr>
                            
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="form_biodata.html" class="card-link mt-3 btn btn-secondary">Back to Form</a>
                <a href="index.html" class="card-link mt-3 btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
                        <?php
                        $q_select = "SELECT * FROM tb_biodata";
                        $result = mysqli_query($conn, $q_select);

                        foreach ($result as $data) {
                            ?>
                            <div class="modal fade" id="detailModal<?php echo $data['id'] ?>" tabindex="-1"
                                aria-labelledby="detailModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="detailModalLabel">Detail Mahasiswa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">NIM</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['nim'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Nama Lengkap</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['nama'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Umur</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['umur'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Tanggal Lahir</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['tanggal'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Alamat</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['alamat'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Telepon</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="<?php echo $data['telepon'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editModal<?php echo $data['id'] ?>" tabindex="-1"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editModalLabel">Edit Mahasiswa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form onsubmit="return validateForm()" method="post" action="">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nim" class="form-label">NIM</label>
                                                    <input type="text" class="form-control" id="nim" name="nim"
                                                        value="<?php echo $data['nim'] ?>" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        value="<?php echo $data['nama'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" id="umur" name="umur"
                                                        value="<?php echo $data['umur'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                        value="<?php echo $data['tanggal'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                                        value="<?php echo $data['alamat'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telepon" class="form-label">Telepon</label>
                                                    <input type="tel" class="form-control" id="telepon" name="telepon" pattern="[0-9]{10,12}"
                                                        value="<?php echo $data['telepon'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="hapusModal<?php echo $data['id'] ?>" tabindex="-1"
                                aria-labelledby="hapusModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="hapusModalLabel">PERHATIAN!!!</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="" method="post">
                                            <div class="modal-body">
                                                <h3>Yakin ingin hapus data dari NIM
                                                    <?php echo $data['nim'] ?>?
                                                </h3>
                                                <input type="hidden" value="<?php echo $data['nim'] ?>" name="nim">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
