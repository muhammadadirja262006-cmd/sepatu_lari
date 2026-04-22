<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Data Produk</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Produk</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM produk");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_produk']; ?></td>
            <td>Rp <?= $d['harga']; ?></td>
            <td><?= $d['deskripsi']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?= $d['id_produk']; ?>" 
                onclick="return confirm('Yakin mau hapus?')" 
                class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>