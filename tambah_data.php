<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="proses_tambah_data.php" method="POST">
 <h2 class="text-center">INPUT DATA</h2>

 <div class="mb-3">
   <label for="Nama" class="form-label">Nama</label>
   <input type="text" class="form-control" id="Nama" name="Nama"> 
 </div>

 <div class="mb-3">
   <label for="NoTelp" class="form-label">No Telp</label>
   <input type="text" class="form-control" id="NoTelp" name="NoTelp"> 
 </div>

 <div class="mb-3">
   <label for="Barang" class="form-label">Barang</label>
   <input type="text" class="form-control" id="Barang" name="Barang"> 
 </div>

 <div class="mb-3">
   <label for="Jumlah" class="form-label">Jumlah</label>
   <input type="text" class="form-control" id="Jumlah" name="Jumlah"> 
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>   
</body>
</html>