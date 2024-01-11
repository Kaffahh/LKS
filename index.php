<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.js"></script>
    <style>
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

    .tales {
        width: 100%;
    }

    .carousel-inner {
        width: 100%;
        max-height: 500px !important;
    }
    </style>
</head>

<body>
    <nav class="navbar bg-dark " style="color: white;">
        <div class="container">
            <div class="py-2 gap-4">
                <h3 class="judul">E-Commerce</h3>
            </div>
            <button class="btn btn-outline-light" type="submit">
                <a style="text-decoration: none; color: rgb(255, 255, 255)" href="login.html">Sign In</a>
            </button>
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
    <div class="d-flex container">
        <div class="card" style="width: 15rem">
            <img src="images/cat avitex 132.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Cat Avitex</h5>
                <p class="card-text">Rp.130.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/cat dulux5 143.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Cat Dulux</h5>
                <p class="card-text">Rp.145.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/cat jotun 320.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Cat Jotun</h5>
                <p class="card-text">Rp.320.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/cat mowilex 256.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Cat Mowilex</h5>
                <p class="card-text">Rp.250.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="d-flex container">
        <div class="card" style="width: 15rem">
            <img src="images/cat nippon 200.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Cat Nippon Paint</h5>
                <p class="card-text">Rp.210.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/gypsumaplus 66.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Gypsum Aplus</h5>
                <p class="card-text">Rp.65.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/gypsumgrc 91.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Gypsum GRC</h5>
                <p class="card-text">Rp.90.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/gypsumjayaboard 243.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Gypsum JayaBoard</h5>
                <p class="card-text">Rp.240.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    </div>
    <div class="d-flex container">
        <div class="card" style="width: 15rem">
            <img src="images/gypsumjb 69.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Gypsum JayaBoard2</h5>
                <p class="card-text">Rp.70.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="images/gypsumknauf 53.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Gypsum Knauf</h5>
                <p class="card-text">Rp.55.000,00</p>
                <a href="beli.html" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <footer class="fixed-bottom" style="
        text-align: center;
        padding: 10px;
        width: 100%;
        height: 50px;
        justify-content: center;
        background-color: black;
        color: white;
      ">
        ©2023 Copyright: M.Islami Kaffah SMKN 17 Jakarta
    </footer>
</body>

</html>