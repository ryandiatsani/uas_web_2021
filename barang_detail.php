<?php

  
        include_once('koneksi.php');

        $id = $_GET['id'];



        $sql = "SELECT * FROM barang WHERE id_barang = $id";
        $barang = mysqli_query($conn,$sql);
        $data = mysqli_fetch_object($barang);




?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/barang.css" rel="stylesheet">

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#"><b>PromosiBarang.at</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Kategori Barang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="barang.php?id=1">PC Component</a>

          <a class="dropdown-item" href="barang.php?id=2">Console Game</a>
          <a class="dropdown-item" href="barang.php?id=3">Game Fisik DVD</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      </ul>
     
    </div>
  </nav>
</div>


<div class="row m-5 p-5">
      <div class="col-2">
    
      </div>
      <div class="col-8">
        <img src=<?=$data->image_url?> class="img-fluid mb-5" style="border-radius:5px" alt="Responsive image">
         <h2><?=$data->nama_barang?></h2>
         <p class="mt-5 mb-5"><?=$data->desc_lengkap?></p>
         <a href="favorite_tambah.php?id=<?=$id?>" type="button" class="btn btn-danger">Tambahkan ke favorite</a>
      </div>
      <div class="col-2">
    
      </div>
</div>


<div class="container">
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
      
      <p>&copy; 2021 1810520035-LALU AHMAD GEDE PARIANDI ATSANI
      </div>

    </div>
  </footer>
 </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>

