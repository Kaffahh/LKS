<?php

$username = "localhost";
$y = "root";
$password = "";
$database = "db_kaffah";

$conn = mysqli_connect($username, $y, $password, $database);

if (!$conn) {
    echo "Koneksi Gagal" . mysqli_connect_error();
}