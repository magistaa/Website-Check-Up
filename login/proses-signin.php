<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){

    $nama_petugas = $_POST['nama_user'];
    $username= $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user VALUES ('','$nama_user','$username','$password')";

    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);
    var_dump($count);
    if($count == 1){
        header("Location:http://localhost/corona/login/index.php");
    }
    
    else{
        header("Location:http://localhost/corona/login/signin.php");
    }

} 

?>
