<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

 
    <div class="kotak_login">
        <p class="tulisan_login">Buat Akun</p>
            
 
         <form method="post" action="proses-signin.php">

            <label>Nama</label>
            <input type="text" name="name_user" class="form_login"required="required">
 
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required="required">
          </>  
 
         <button type="submit" class="tombol_login" name="simpan">Simpan</button>
            <br/>
            <br/>
        </form>
        
    </div>
 
</body>
</html>
