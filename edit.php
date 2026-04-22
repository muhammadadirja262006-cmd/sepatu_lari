<?php 
include 'koneksi.php'; 

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Produk</h2>

    <form method="POST">
        <input type="text" name="nama_produk" value="<?= $d['nama_produk']; ?>" class="form-control mb-2">
        <input type="number" name="harga" value="<?= $d['harga']; ?>" class="form-control mb-2">
        <textarea name="deskripsi" class="form-control mb-2"><?= $d['deskripsi']; ?></textarea>

        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="produk.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if(isset($_POST['update'])){
        mysqli_query($conn, "UPDATE produk SET 
            nama_produk='$_POST[nama_produk]',
            harga='$_POST[harga]',
            deskripsi='$_POST[deskripsi]'
            WHERE id_produk='$id'");

        echo "<script>alert('Data berhasil diupdate');window.location='produk.php';</script>";
    }
    ?>
</div>

</body>
</html>