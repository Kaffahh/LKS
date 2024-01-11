<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f7f7f7;
        color: #333;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
        color: #393e46;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f2f2f2;
    }


    .tbcari {
        margin-left: 10px;
    }

    .formisi {
        padding-right: 50px;
        padding-left: 50px;
        text-align: center;
    }

    .namaadmin {
        margin-right: 200px;

    }

    .nav-item {
        padding-right: 40px;
    }

    .form-control {
        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
    }

    .card {
        margin: 20px;
    }

    .judul:nth-child(1) {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 250%;
        padding-left: 10px;
    }

    .nav-item {
        padding-right: 40px;
    }

    .form-control {
        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
    }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar bg-dark " style="color: white;">
        <div class="container">
            <div class="py-2 gap-4">
                <h3 class="judul">E-Commerce</h3>
            </div>
            <div class=" btn-outline-light d-flex namaadmin">
                <a style=" text-decoration: none; color: rgb(255, 255, 255);" href=" #">Admin</a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg  bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.html">Artikel</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.html">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_produk.html">Tambah Produk</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-light" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Data Pembeli</h1>

        <a href="tambah_data.html">Tambah</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>

            <?php
            // Load file koneksi.php
            include "koneksi.php";

            $query = "SELECT * FROM produk";
            $sql = mysqli_query($conn, $query);
            $row = mysqli_num_rows($sql);
            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * FROM produk");
            $hasil = mysqli_fetch_array($tampil);
            if ($row > 0) {
                while ($data = mysqli_fetch_array($sql)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $data['nama_produk'] . "</td>";
                    echo "<td>" . $data['kategori'] . "</td>";
                    echo "<td>" . $data['harga_beli'] . "</td>";
                    echo "<td>" . $data['harga_jual'] . "</td>";
                    ?>
            <td><a href="edit_data.php?id=<?php echo $hasil['id']; ?>">edit </a>|
                <a href=" hapus_data.php?id=<?php echo $hasil['id']; ?>">hapus</a>
            </td>
            <?php
                    echo "</tr>";
                }
            } else { // Jika data tidak ada
                echo "<tr>
                <td colspan='4'>Data tidak ada</td>
            </tr>";
            }
            ?>
        </table>
        <br>
        <a href="index.php" class="button justify-content-center d-flex">Kembali ke Beranda</a>
    </div>
</body>

</html>