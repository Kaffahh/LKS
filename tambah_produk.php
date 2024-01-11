<?php
include 'koneksi.php';

$nama_produk = $_POST["nama_produk"];
$kategori = $_POST["kategori"];
$gambar = $_FILES["gambar"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "images/" . $nama_file;

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
    if ($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $path)) {
            $query = "INSERT INTO produk(gambar) VALUES('" . $nama_file . "','" . $tipe_file . "')";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: index.php");
            } else {
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='form.php'>Kembali Ke Form</a>";
            }
        } else {
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='form.php'>Kembali Ke Form</a>";
        }
    } else {
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
} else {
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a href='form.php'>Kembali Ke Form</a>";
}
$query_sql = "INSERT INTO produk (nama_produk,kategori,gambar,harga_beli,harga_jual) VALUES ('$nama_produk', '$kategori', '$gambar','$harga_beli','$harga_jual')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: admin.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}