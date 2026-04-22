<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ortuseight Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #11a8ca;
        }
        .hero {
            padding: 60px 0;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <h4 class="text-white">Ortuseight Store</h4>

        <div>
            <a href="index.php" class="btn btn-light btn-sm me-2">Home</a>
            <a href="produk.php" class="btn btn-light btn-sm me-2">Produk</a>
            <a href="tentang.php" class="btn btn-light btn-sm">Tentang</a>
        </div>

    </div>
</nav>
<!-- Hero -->
<div class="container hero">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Toko Sepatu Lari</h1>
            <p>
                Website ini saya buat untuk menjual sepatu lari dengan kualitas yang bagus dan nyaman saat digunakan. 
Sepatu yang tersedia bisa dipakai untuk olahraga maupun aktivitas sehari-hari. 
Saya juga memilih produk yang desainnya menarik dan tidak mudah rusak, jadi bisa dipakai dalam waktu yang cukup lama. 
Harapannya, website ini bisa membantu pengguna dalam menemukan sepatu yang sesuai dengan kebutuhan mereka.
</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="img/images1.jpg" width="80%">
        </div>
    </div>
</div>

<!-- Produk -->
<div class="container mt-5">
    <h3 class="mb-4 text-center">Produk Terbaru</h3>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="img/img1.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Sepatu Running Ortuseight Hypersonic 2.0 - Cyan/Aqua</h5>
                    <p class="text-danger">Rp 1.200.000</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="img/img2.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Sepatu Running Ortuseight Hyperdrive 2.2 - All Black</h5>
                    <p class="text-danger">Rp 1.500.000</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="img/img3.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Sepatu Running Ortuseight Hypersonic 2.0 - White/Ortrange</h5>
                    <p class="text-danger">Rp 1.700.000</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<div class="bg-dark text-white text-center p-2">
    <small>2026 Ortuseight Store</small>
</div>

</body>
</html>