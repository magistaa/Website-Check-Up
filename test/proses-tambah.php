<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){

    $nama_pasien = $_POST['nama_pasien'];
    $alamat = $_POST['alamat'];
    $tgl_checkup = $_POST['tgl_checkup'];
    $id_status =$_POST['id_status'] ;

    $sql = "INSERT INTO pasien VALUES('','$nama_pasien','$alamat','$tgl_checkup','$id_status')";

    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);
    var_dump($count);
    if($count == 1){
        header("Location: index.php");
    }
    
    else{
        header("Location: tambah.php");
    }
}

?>