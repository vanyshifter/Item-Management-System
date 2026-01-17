<?php
include "koneksi.php";

$id_usr = $_GET['id'];

$query  = "DELETE FROM peminjaman WHERE id = '$id_usr'";
$insert = mysqli_query($koneksi, $query); 

if ($insert) {
    echo "
    <script>
        window.location.href='index.php';
    </script>
    ";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi); 
}
?>
