<?php
require 'config.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT nama FROM db_login WHERE nama = '$nama'");

        if (mysqli_fetch_assoc($result)) {
            echo "
                    <script>
                        alert('nama Telah Digunakan');
                        document.location.href = 'register.php';
                    </script>
                ";
        } else {
            $sql = "INSERT INTO db_login VALUES ('','$nama','$password')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "
                        <script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'index.php';
                        </script>
                    ";
            } else {
                echo "
                        <script>
                            alert('Registrasi Gagal');
                            document.location.href = 'register.php';
                        </script>
                    ";
            }
        }
    } else {
        echo "
                <script>
                    alert('Password Anda Tidak Sama !!!');
                    document.location.href = 'register.php';
                </script>
            ";
    }
}
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style_register.css">
    <!-- <link href="images/logo.png" rel="shortcut icon"> -->
    <title>Register</title>
</head>

<body>
    <!-- <section id="navbar">
        <div class="navbar">
            <div class="container">
                <center>
                    <h2>Selamat datang di Luthfish Market</h2>
                    <hr>
                    <p>Silahkan Mengisi form pembelian terlebih dahulu untuk pengiriman Ikan <br> data anda 100% aman bersama kami.</p>
                </center>
            </div>
        </div>
    </section> -->
    <center>
        <div class="container">
            <div class="row align-items-stars">
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Register</h5>
                            <form action="" method="post" class="row" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Password</address></label>
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Confirm password</label>
                                    <input type="password" name="cpassword" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="register" class="btn btn-color" value="register">
                                    <div class="kata2"> Sudah Punya Akun? <a href="index.php"> Login Here</a> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>

</html>