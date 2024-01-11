<?php
include 'koneksi.php';

$nama = $_POST["nama"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM user WHERE nama = '$nama' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: admin.php");
} else {
    echo "<center><h1>Username atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
    <button><strong><a href='login.html'>Coba Lagi</a></strong></button></center>";
}