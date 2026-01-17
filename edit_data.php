<?php
include 'koneksi.php';

$id_usr = $_GET['id']; 

$query = "SELECT * FROM peminjaman WHERE id = '$id_usr'";
$result = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="proses_edit_data.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>"> 
 <h2 class="text-center">Edit Data Peminjaman</h2>

 <div class="mb-3">
   <label for="Nama" class="form-label">Nama</label>
   <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $data['Nama']; ?>"> 
 </div>

 <div class="mb-3">
   <label for="NoTelp" class="form-label">No Telp</label>
   <input type="text" class="form-control" id="NoTelp" name="NoTelp" value="<?= $data['NoTelp']; ?>"> 
 </div>

 <div class="mb-3">
   <label for="Barang" class="form-label">Barang</label>
   <input type="text" class="form-control" id="Barang" name="Barang" value="<?= $data['Barang']; ?>"> 
 </div>

 <div class="mb-3">
   <label for="Jumlah" class="form-label">Jumlah</label>
   <input type="text" class="form-control" id="Jumlah" name="Jumlah" value="<?= $data['Jumlah']; ?>"> 
 </div>

 <button type="submit" class="btn btn-secondary">Edit</button>
</form>

    </div>
<?php } ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>   
</body>
</html>