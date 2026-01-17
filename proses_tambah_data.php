<?php
include 'koneksi.php';

$Nama   = $_POST['Nama'];
$NoTelp    = $_POST['NoTelp'];
$Barang  = $_POST['Barang'];
$Jumlah  = $_POST['Jumlah'];

$query = "INSERT INTO peminjaman (Nama, NoTelp, Barang, Jumlah) VALUES ('$Nama', '$NoTelp', '$Barang', '$Jumlah')";
$insert = mysqli_query($koneksi, $query);

if ($insert) {
    echo "
    <script>
        alert('Berhasil di input!');
        window.location.href='index.php';
    </script>
    ";
}