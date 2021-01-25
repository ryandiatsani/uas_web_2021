<?php
    include_once("koneksi.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM favorit WHERE id_fav = $id";
    $result = mysqli_query($conn,$sql);

    if ($result) {
     
        header("Location: favorite.php");
    }else{
        $status = "Hapus data gagal :".mysqli_error($conn);
    }


    echo $status    
?>
