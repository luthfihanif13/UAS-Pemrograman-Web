<?php
session_start();
if(isset($_POST['blogin'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if ($email == "admin@gmail.com" && $password == "admin"){
        $_SESSION['role'] = "admin";
        header("Location: index.php");

    }elseif($email == "user@gmail.com" && $password == "user"){
        $_SESSION['role'] = "user";
        header("Location: index.php");
    } else {
        echo "<script>
        alert('Email atau password Anda salah. Silahkan coba lagi!')
        </script>";
        header("Refresh:0; url=index.php");
    }

}

?>