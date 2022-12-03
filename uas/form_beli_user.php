<?php
require('config.php');
// date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST["submit"])) {
    $nama_ikan = htmlspecialchars($_POST["nama_ikan"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $tanggal_pengiriman = htmlspecialchars($_POST["tanggal_pengiriman"]);

    $sql = "INSERT INTO barang VALUES ('', '$nama_ikan', '$jumlah', '$tanggal_pengiriman')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
            <script>
                alert('Data berhasil ditambah Selamat menunggu Pesanan anda:)');
                document.location.href = 'user_beli_ikan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'form_beli_user.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembeli</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <section id="navbar">
        <div class="navbar">
            <div class="container">
                <center>
                    <h2>Selamat datang di Luthfish Market</h2>
                    <hr>
                    <p>Silahkan Mengisi form pembelian Ikan di Luthfish Market <br>Terima Kasih telah belanja di Luthfish Market</p>
                </center>
            </div>
        </div>
    </section>
    <center>
        <div class="container">
            <h3>Form Pembeli</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <table border="1" cellpadding="7">
                    <tr>
                        <td for="nama">Nama Ikan </td>
                        <td><input type="text" name="nama_ikan" placeholder="Nama Ikan" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="jumlah">Jumlah</td>
                        <td><input type="number" name="jumlah" placeholder="Jumlah" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="tanggal_pengiriman">Tanggal Pengiriman</td>
                        <td><input type="date" name="tanggal_pengiriman" placeholder="22-12-22" require></td>
                    </tr>
                    <br>
                    <td><input type="submit" name="submit" value="Simpan"></td>

                </table>
            </form>
        </div>
    </center>
    <section class="footer">
        <div class="footer">
            <b>
                <p>Copyright &copy; 2022 Luthfish Market</p>
            </b>
        </div>
    </section>
</body>

</html>