<?php
   require_once('conn.php');
   if($_POST != null)
   {
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        $stok_barang = $_POST['stok_barang'];


        $tambah = "INSERT INTO `tbl_barang` (`id`,`nama_barang`, `harga_barang`, `stok_barang` ) VALUE (NULL, '$nama_barang' , '$harga_barang', '$stok_barang') ";
        $query = mysqli_query($conn, $tambah);
   }

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
    <a class="navbar-brand" href="#">Toko Papua Maju</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                <h1 class=" fw-bolder">Tambah Data Barang</h1>
            </div>
        </div>

        <div class="row mt-2 d-flex justify-content-center">
            <div class="col-6">

                <form action="" method="post">

                    <div class="mb-3">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="namabarang" placeholder="Masukan nama barang" required>
                    </div>

                    <div class="mb-3">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control" id="hargabarang" placeholder="Masukan harga barang" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok Barang</label>
                        <input type="number" name="stok_barang" class="form-control" id="stok" placeholder="Masukan harga barang" required>
                    </div>

                    <button class="btn btn-primary" type="submit" >Simpan</button>

                </form>

                

            </div>
        </div>


    </div>
</section>




    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>