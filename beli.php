<?php
include 'koneksi.php';
$nama_penerima = $_POST["nama_penerima"];
$nama_produk = $_POST["nama_produk"];
$harga_satuan = $_POST["harga_satuan"];
$jumlah = $_POST["jumlah"];
$harga_total = $harga_satuan * $jumlah = $_POST["harga_total"];

$query_sql = "INSERT INTO transaksi (nama_penerima,nama_produk,harga_satuan,jumlah,harga_total) VALUES ('$nama_penerima','$nama_produk', '$harga_satuan', '$jumlah', '$harga_total')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.php");
    echo "Pembelian SUKSES!";
} else {
    echo "Pembelian Gagal : " . mysqli_error($conn);
}