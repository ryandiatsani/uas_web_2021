<link href="css/bootstrap.min.css" rel="stylesheet">
<?php 

        include_once('koneksi.php');
 
        $id = $_GET['id'];
        $status ='';
        $sql = "SELECT * FROM barang WHERE id_barang = $id";
        $barang = mysqli_query($conn,$sql);
        $data = mysqli_fetch_object($barang);


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $namabarang = $_POST['txt_nama_barang'];
            $imageurl = $_POST['txt_image_url'];
            $descsingkat = $_POST['txt_desc_singkat'];
            $desclengkap = $_POST['txt_desc_lengkap'];
            $kategori = $_POST['txt_kategori'];
            $kategoriint = (int)str_replace(' ', '', $kategori);
   
            if (empty($namabarang) || empty($descsingkat) || empty($desclengkap)) {
              $status = "Form Nama barang, deskripsi singkat dan deskripsi lengkap tidak boleh ada yang kosong";
            }else{

              $sql = "UPDATE barang SET nama_barang='$namabarang', image_url='$imageurl', desc_singkat='$descsingkat', desc_lengkap='$desclengkap', kategori_barang='$kategoriint' WHERE id_barang ='$id'";
              $result = mysqli_query($conn,$sql);
      
              if ($result) {
    
              header("Location: barang.php?id={$kategoriint}");
              }else{
                  $status = "Simpan data gagal :".mysqli_error($conn);
              }
            
            
            }
           
        }


?>


<form class="p-5 m-5" action="" method="post">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" name="txt_nama_barang" value="<?=$data->nama_barang?>">
        </div>
        <div class="form-group">
          <label >Image url/Image address</label>
          <input type="text" class="form-control" name="txt_image_url" value="<?=$data->image_url?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi singkat</label>
          <input type="text" class="form-control" name="txt_desc_singkat" value="<?=$data->desc_singkat?>">
        </div>
        <div class="form-group">
          <label >Deskripsi lengkap</label>
          <textarea class="form-control" name="txt_desc_lengkap"  rows="3" ><?=$data->desc_lengkap?></textarea>
        </div>
        <div class="form-group">
        <label >Kategori barang (1 = Pc component, 2 = console , 3 = Game fisik DVD )</label>
          <input type="number" class="form-control" name="txt_kategori" value="<?=$data->kategori_barang?>">
        </div>
      <div>
        <input type="submit" class="btn btn-primary" value="Simpan/Promosikan"><br>
        <?php
          echo $status
        ?>
    </div>
    </form>

