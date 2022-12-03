<?php

include_once 'Controller/pelanggan.php';
$id = $_GET['id'];
$pembeli = new pembeli;

if (isset($_POST['submit'])){
    $editPembeli = $pembeli->editPembeli($_GET['id'], $_POST['nama_pembeli'], $_POST['email'], $_POST['no_hp'], $_POST['alamat'], $_FILES['gambar']['name']);
    if ($editPembeli){
        echo "<script>alert('Data pembeli berhasil diEdit!');window.location = 'index1.php';</script>";
    
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
                    <h2>Data Luthfish Market</h2>
                    <hr>
                </center>
            </div>
        </div>
    </section>
    <center>
        <div class="container">
            <h3>Edit Data Pembeli</h3>

            <?php

            $data = $pembeli->getPembeliById($id);

            foreach ($data as $data){
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <table border="1" cellpadding="7">
                    <tr>
                        <td for="nama">Nama </td>
                        <td><input type="text" name="nama_pembeli" value="<?= $data['nama_pembeli'] ?>" placeholder="Nama Lengkap" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="email">Email</td>
                        <td><input type="email" name="email" value="<?= $data['email'] ?>" placeholder="Email" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="no_hp">Nomor HP</td>
                        <td><input type="number" name="no_hp" value="<?= $data['no_hp'] ?>" placeholder="Nomor HP" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="alamat">Alamat</td>
                        <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>" require></td>
                    </tr>
                    <tr>
                        <td for="">Upload Foto Tujuan : </td>
                        <td><input type="file" name="gambar" value="<?= $data['gambar'] ?>"><br></td>
                    </tr>
                    <td><input type="submit" name="submit" value="Simpan"></td>

                </table>
            </form>
            <?php
            }

            ?>
            
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