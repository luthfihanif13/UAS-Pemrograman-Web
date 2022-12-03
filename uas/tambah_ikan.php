<?php
require('config.php');
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $waktu_upload = date("d-m-y  H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'gambar/' .$gambar_baru)) {
        $sql = "INSERT INTO daftar_ikan VALUES ('', '$gambar_baru', '$nama', '$harga','$waktu_upload')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "
                <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'main_content_admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal ditambah');
                    document.location.href = 'tambah_ikan.php';
                </script>
            ";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ikan</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #588d24;
        }

        .container {
            width: 60%;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgb(117, 159, 26);
            border-radius: 10px;
        }

        .container h1 {
            color: black;
            text-align: center;
        }

        table {
            margin-bottom: auto;
            border-collapse: collapse;
            background: rgb(107, 202, 81);
            color: #000000;
        }

        th,
        td {
            text-align: left;
            border: 2px solid #000000;
            padding: 20px 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Ikan</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <table border="1" cellpadding="7">
                <tr>
                    <td for="">Upload Gambar (gambar.jpg) :</td>
                    <td> <input type="file" name="gambar" required><br></td>
                </tr>
                <tr>
                    <td for="nama">Nama</td>
                    <td> <input type="text" name="nama" required><br><br></td>
                </tr>
                <tr>
                    <td for="harga">Harga</td>
                    <td> <input type="text" name="harga" required><br><br></td>
                </tr>
                <button type="submit" name="tambah" class="btn">Tambah</button>
            </table>
        </form>
    </div>
</body>

</html>