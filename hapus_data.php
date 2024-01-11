<?php

include "koneksi.php";

$id = $_GET['id'];


if ($id = $_GET['id']) {
    mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");
    echo "<h1><center>Hapus Data Sukses!</center></h1>";
    echo "<br>";
    echo "<h4><center><a href=admin.php>Kembali</a></center></h4>";
} else {
    echo "Input Gagal";
}