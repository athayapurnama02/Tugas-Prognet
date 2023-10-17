<?php
include 'koneksi.php';

// Ambil data nama dan umur dari database
$sql = "SELECT nim, nama FROM tb_biodata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Daftar Biodata</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <a href="index.html">>> Back to Home <<</a>
        </div>
        <h1>Daftar Biodata</h1>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>";
                    echo '<a href="detail.php?id=' . $row["id"] . '">Detail</a>';
                    echo ' | ';
                    echo '<a href="edit.php?id=' . $row["id"] . '">Edit</a>';
                    echo ' | ';
                    echo '<a href="delete.php?id=' . $row["id"] . '" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">Delete</a>';
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data biodata.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>