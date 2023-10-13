<?php
   require_once('conn.php'); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-warning">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid container ">
    <a class="navbar-brand fw-bolder link-success" href="#">Toko Papua Maju</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section>
    <div class="container">

        <div class="row mt-5 text-center">
            <div class="col-12">
                <h1 class=" fw-bolder">Data Barang</h1>
            </div>
        </div>

        <div class="row mt-2 d-flex justify-content-center">
            <div class="col-10">
                <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data barang </a>
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </thead>
                    <?php $i = 0; foreach($datas as $data) : ?>
                        <tbody>
                            <td><?= ++$i ?>.</td>
                            <td><?= $data['nama_barang']?></td>
                            <td><?= rupiah($data['harga_barang'])?></td>
                            <td><?= $data['stok_barang']?></td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                                <a href="">Detail</a>
                            </td>
                        </tbody>
                    <?php endforeach ?>
                </table>
            </div>
        </div>


    </div>
</section>




    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>