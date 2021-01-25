
<?php 

        include_once('koneksi.php');
     
        $id = $_GET['id'];
        $status = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       

           
            $namabarang = $_POST['txt_nama_barang'];
            $imageurl = $_POST['txt_image_url'];
            $descsingkat = $_POST['txt_desc_singkat'];
            $desclengkap = $_POST['txt_desc_lengkap'];

            if (empty($namabarang) || empty($descsingkat) || empty($desclengkap)) {
              $status = "Form Nama barang, deskripsi singkat dan deskripsi lengkap tidak boleh ada yang kosong";
            }else{
              $sql = "INSERT into barang VALUES(NULL,'$namabarang','$descsingkat','$desclengkap','$imageurl',$id)";
              $result = mysqli_query($conn,$sql);
      
              if ($result) {
       
              header("Location: barang.php?id={$id}");
              }else{
                  $status = "Simpan data gagal :".mysqli_error($conn);
              }
            }
            
            
            

           
        }


?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<form class="p-5 m-5" action="" method="post">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" name="txt_nama_barang" >
        </div>
        <div class="form-group">
          <label >Image url/Image address (jika link salah atau kosong, tidak ada gambar yang akan ditampilkan)</label>
          <input type="text" class="form-control" name="txt_image_url" placeholder="contoh : https://google.com/image/images.jpg">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi singkat</label>
          <input type="text" class="form-control" name="txt_desc_singkat">
        </div>
        <div class="form-group">
          <label >Deskripsi lengkap</label>
          <textarea class="form-control" name="txt_desc_lengkap"  rows="3"></textarea>
        </div>
        <div class="form-group">
        <?php

          $id = $_GET['id'];
          if ($id=='1') {
              echo "Kategori : PC Component";
            }else if ($id=='2') {
              echo "Kategori : Console";
            }else if ($id=='3') {
              echo "Kategori : Game fisik DVD";
            }else {
              echo "Failed to load id";
            }
        ?>
        </div>
      <div>
        <input type="submit" class="btn btn-primary" value="Simpan/Promosikan"><br>
        <?php
          echo $status
        ?>
    </div>
    </form>
  