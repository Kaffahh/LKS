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
    <nav class="sidebar sidebar-expand-lg  bg-primary">
        <div class="container">
            <button class="sidebar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sidebar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Produk</a>
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

        <a href="tambah_user.html">Tambah</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            if (isset($_GET['cari'])) {
                $data = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%" . $cari . "%'");
            } else {
                $data = mysqli_query($conn, "SELECT * FROM produk");
            }

            $no = 1;
            $tampil = mysqli_query($conn, "SELECT * FROM produk");
            while ($d = mysqli_fetch_array($data)) {

                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $d['nama_toko']; ?>
                </td>
                <td>
                    <a href="edit_data.php?id=<?php echo $hasil['id']; ?>">edit </a>|
                    <a href="hapus_data.php?id=<?php echo $hasil['id']; ?>">hapus</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
        <br>
        <a href="index.php" class="button justify-content-center d-flex">Kembali ke Beranda</a>
    </div>
</body>

</html>