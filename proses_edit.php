<?php

include "koneksi.php";

$id = $_GET['id'];
$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];

if ($id = $_GET['id']) {
    mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', kategori='$kategori',  harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id' ");
    echo "<center><h3> Edit Data Sukses!</h3></center>";
    echo "<br>";
    echo "<center> <a href=admin.php>Lihat Hasil</a></center>";
} else {
    echo "Edit Gagal";
}