<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Produk</h2>

    <form method="POST">
        <input type="text" name="nama_produk" class="form-control mb-2" placeholder="Nama Produk" required>
        <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
        <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="produk.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, deskripsi) VALUES (
            '$_POST[nama_produk]',
            '$_POST[harga]',
            '$_POST[deskripsi]'
            )");

        echo "<script>alert('Data berhasil ditambah');window.location='produk.php';</script>";
    }
    ?>
</div>

</body>
</html>