<?php

include "koneksi.php";

$id_usr = $_POST['id'];
$Nama   = $_POST['Nama'];
$NoTelp    = $_POST['NoTelp'];
$Barang  = $_POST['Barang'];
$Jumlah  = $_POST['Jumlah'];

$query  = "UPDATE peminjaman SET Nama = '$Nama', NoTelp = '$NoTelp', Barang = '$Barang', Jumlah = '$Jumlah' WHERE id = '$id_usr'";
$update = mysqli_query($koneksi, $query);

if ($update) {
    echo "
    <script>
        alert('Data berhasil diperbarui');
        window.location.href='index.php';
    </script>
    ";
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
?>