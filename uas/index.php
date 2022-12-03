<?php
    include 'config.php';
    if(isset($_POST['login'])){
        $nama = $_POST['nama'];
        $password = $_POST['pass'];

        $result = mysqli_query($conn, "SELECT * FROM db_login WHERE nama ='$nama'");
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                header("location: main_content_user.php");
                exit;
            }
        }
    $error = true;
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
            <button type="submit" name="login">Login</button>
            <p>
                <p>Login Admin? <a href="loginAdmin.php">Click here</a></p>
                <p>Not registered yet? <a href="register.php">Create an account</a></p>
                
            </p>
            
            </form>
        </div>
        <div class="right">
            <img src="gambar/logoLogin.jpg" alt="">
        </div>
    </div>
</body>
</html>