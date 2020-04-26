<?php
$connect = mysqli_connect("localhost","root","","corona");

if (mysqli_connect_error()) {
    echo "koneksi database gagal : "  . mysqli_connect_error();
}
?>