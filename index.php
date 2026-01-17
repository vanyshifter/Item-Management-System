<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tabel Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center">DAFTAR PEMINJAMAN</h2>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Aksi</th>
                <th></th>
            </tr>
            <?php
            include 'koneksi.php';

            $nomor = 1;
            $query = "SELECT * FROM peminjaman";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $nomor++ . "</td>";
                echo "<td>" . $row['Nama'] . "</td>";
                echo "<td>" . $row['NoTelp'] . "</td>";
                echo "<td>" . $row['Barang'] . "</td>";
                echo "<td>" . $row['Jumlah'] . "</td>";
                echo "<td><a href='edit_data.php?id={$row['id']}' class='btn btn-secondary'>Edit</a></td>";
                echo "<td><a href='proses_delete.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin enghapus data ini?\")'>Delete</a></td>";
                echo "</tr>";
            }
            
            ?>
        </table>
        <a href="tambah_data.php"><button type="button" class="btn btn-primary">Tambah Data</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>