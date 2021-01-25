<?php
    include_once("koneksi.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id_barang = $id";
    $barang = mysqli_query($conn,$sql);
    $data = mysqli_fetch_object($barang);


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


     $sql = "DELETE FROM barang WHERE id_barang = $id";
     $result = mysqli_query($conn,$sql);

     if ($result) {

     header("Location: barang.php?id={$data->kategori_barang}");
     }else{
         $status = "Simpan data gagal :".mysqli_error($conn);
     }
     
    }

 
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="row m-5 p-5">
      <div class="col-2">
    
      </div>
      <div class="col-8">
         <h2>Apakah anda yakin ingin menghapus data ini?</h2>
         <form class="p-5 m-5" action="" method="post">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" name="txt_nama_barang" value="<?=$data->nama_barang?>" readonly>
        </div>
        <div class="form-group">
          <label >Image url/Image address</label>
          <input type="text" class="form-control" name="txt_image_url" value="<?=$data->image_url?>" readonly>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi singkat</label>
          <input type="text" class="form-control" name="txt_desc_singkat" value="<?=$data->desc_singkat?>" readonly>
        </div>
        <div class="form-group">
          <label >Deskripsi lengkap</label>
          <textarea class="form-control" name="txt_desc_lengkap"  rows="3" readonly><?=$data->desc_lengkap?></textarea>
        </div>
        <div class="form-group">
          <label >Kategori barang (1 = Pc component, 2 = console , 3 = Game fisik DVD )</label>
          <input type="number" class="form-control" name="txt_kategori" value="<?=$data->kategori_barang?>" readonly>
        </div>
      <div>
        <input type="submit" class="btn btn-danger" value="HAPUS"><br>
        <label >jika tidak silahkan kembali ke page sebelumnya</label>
        
    </div>
    </form>
      </div>
      <div class="col-2">
    
      </div>
</div>