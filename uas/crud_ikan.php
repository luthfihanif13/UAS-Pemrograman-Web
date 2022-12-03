<?php
require('config.php');

$result = mysqli_query($conn, "SELECT * FROM daftar_ikan");

$daftar_ikan = [];

while ($row = mysqli_fetch_assoc($result)) {
  $daftar_ikan[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Ikan Luthfish Market</title>
  <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgb(100, 149, 237);
    }

    .container {
      width: 50%;
      height: 200%;
      margin-top: 730px;
      flex-direction: column;
      justify-content: center;
      background: white;
      border-radius: 10px;
    }

    .tambah-button {
      background-color: rgb(107, 202, 81);
      padding: 10px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      margin-bottom: auto;

    }

    .container h1 {
      color: black;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(rgb(167, 205, 238));
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
    <h1>Daftar Ikan Luthfish Market</h1>
    <button class="tambah-button"><a href="tambah_ikan.php">Tambah Daftar Ikan</a></button>
    <table border=1px>
      <tr>
        <th>No.</th>
        <th>gambar</th>
        <th>Nama Ikan</th>
        <th>Harga</th>
        <th>Waktu Upload</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1;
      foreach ($daftar_ikan as $daf) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo "<img src='gambar/$daf[gambar]' width='50' height='50'>"; ?></td>
          <td><?php echo $daf["nama_ikan"]; ?></td>
          <td><?php echo $daf["harga"]; ?></td>
          <td><?php echo $daf["waktu_upload"]; ?></td>
          <td>
            <a href="deleteIkan.php?id=<?php echo $daf["id"]; ?>" onclick="return confirm('Anda yakin ingin mengahpus data ini ?')">Hapus</a>
          </td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </table>
  </div>

</body>

</html>