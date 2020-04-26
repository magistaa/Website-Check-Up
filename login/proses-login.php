<?php
include' ../koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
    $res = mysqli_query($connect,$sql);

    $count = mysqli_affected_rows($connect);

    if($count == 1){
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_user'] = $data_login['id_user'];
        //nilainya digunakan untuk waktu insert peminjaman

        $_SESSION['nama_user'] = $data_login['nama_user'];
        //nilainya bisa digunakan di navbar,mis.'hai,[nama_petugas]'

        $_SESSION['status'] = "login";
        //membuat status

        header("Location:../login/profil.php");

        setcookie("message", "delete",time()-1);
    }else{

        setcookie("message", "Maaf, Username atau Password salah", time()+3600);

        header("Location: ../login/index.php?pesan=gagal");

    }
}
?>