<?php 
    session_start();
    $nama_admin = 'admin';
    $pass_admin = 'admin';
    if (isset($_POST['login'])) {
        if ($_POST['nama'] == $nama_admin && $_POST['pass'] == $pass_admin){
            //Membuat Session
            $_SESSION["nama"] = $nama_admin; 
            //Pindahkan Kehalaman Admin
            echo "<script>alert('berhasil login')document.location.href = 'main_content_admin.php';</script>";
            header("Location: main_content_admin.php"); 
        }else {
            // Tampilkan Pesan Error
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Username atau Password Salah!"); } 
                </script>'; 
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action=""  method="post">
            <h1>Login</h1>
            <p>Luthfish Market</p>
            <label for="">nama</label>
            <input type="text" name= "nama" placeholder="fulan" required>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="password" required>
            <button type= "submit" name="login">Login</button>
            <p>
                <p>Login User? <a href="index.php">Click here</a></p>
            </p>
            
            </form>
        </div>
        <div class="right">
            <img src="gambar/logoLogin.jpg" alt="">
        </div>
    </div>
</body>
</html>