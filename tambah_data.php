<?php
include 'koneksi.php';

$nama_produk = $_POST["nama_produk"];
$kategori = $_POST["kategori"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$query_sql = "INSERT INTO produk (nama_produk,kategori,harga_beli,harga_jual) VALUES ('$nama_produk', '$kategori','$harga_beli','$harga_jual')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: admin.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}