<?php


        include_once('koneksi.php');

        $id = $_GET['id'];



        $sql = "SELECT * FROM barang WHERE kategori_barang = $id";
        $result = mysqli_query($conn, $sql)

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
        <a class="nav-link " href="favorite.php">Favorite</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      </ul>
     
    </div>
  </nav>
</div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">
      
    <?php 
      $id = $_GET['id'];
      
      if ($id=='1') {
        echo "PC Component";
      }else if ($id=='2') {
        echo "Console";
      }else if ($id=='3') {
        echo "Game fisik DVD";
      }else {
        echo "Failed to load id";
      }
        
    ?>


    </h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>

  </div>

  <div class="container">
    <a href="barang_tambah.php?id=<?= $id ?>" style="margin-bottom:20px;cursor:pointer" class="badge badge-pill badge-success" >Tambah Barang Promosi</a>
    
    <div class="container">
    <div class="row">
    <?php  while ($data = mysqli_fetch_object($result)){?> 
      <div class="col-sm-4  ">
            <div class="card-columns-fluid">
              <div class="card mb-3" style="width: 18rem; height:20rem">
              <img class="card-img-top" style="object-fit:cover;width:100%;height:100px;" width="500" height="363" src=<?= $data->image_url?> alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title"><b><?= $data->nama_barang ?></b></h5>
                        <p class="card-text"><?= $data->desc_singkat ?></p>

                        <a href="barang_detail.php?id=<?= $data->id_barang ?>" style="cursor:pointer" class="badge badge-pill badge-info">Detail informasi barang</a>
                        <a href="barang_update.php?id=<?= $data->id_barang ?>" style="cursor:pointer" class="badge badge-pill badge-warning">Ubah</a>
                        <a href="barang_delete.php?id=<?= $data->id_barang ?>" style="cursor:pointer" class="badge badge-pill badge-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>

     <?php }?>

    </div>
</div> 



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

