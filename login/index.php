<!-- proses pengolahan data -->
<?php
session_start();
$connect = mysqli_connect("localhost","root","","corona");

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
    $res = mysqli_query($connect,$sql);

    $count = mysqli_affected_rows($connect);
    $data_login = mysqli_fetch_assoc($res);

    if($count == 1){

        $_SESSION['id_user'] = $data_login['id_user'];
        //nilainya digunakan untuk waktu insert peminjaman

        $_SESSION['nama_user'] = $data_login['nama_user'];
        //nilainya bisa digunakan di navbar,mis.'hai,[nama_petugas]'


        header("Location:profil.php");

        
    }else{

        header("Location:index.php");

    }
}
?>

<!-- form login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

 
	<div class="kotak_login">
        <p class="tulisan_login">SILAHKAN LOGIN</p>
        	
 
		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="login">

			<br/>
			<br/>
			<center>
				<a class="link" href="#"></a>
			</center>
		</form>
		
	</div>
 
</body>
</html>
