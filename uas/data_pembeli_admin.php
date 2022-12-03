<?php
session_start();
require 'config.php';
if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $result = mysqli_query($conn, "SELECT * FROM pembeli where nama_pembeli LIKE '%$keyword%' or metode LIKE '%$keyword%'");
} else {
  $result = mysqli_query($conn, "SELECT * FROM  pembeli");
}
$pembeli = [];
while ($row = mysqli_fetch_assoc($result)) {
  $pembeli[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pembeli</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <center>
    <section id="navbar">
      <div class="navbar">
        <div class="container">
          <h2>Data Luthfish Market</h2>
          <nav>
            <form action="#" method="$_GET">
              <input type="search" id="input" name="search" placeholder="Seacrh..">
              <button name="cari" type="submit">Cari</button>
            </form>
            <ul>
              <li><a href="main_content_admin.php">Beranda</a></li>
              <li><a href="crud_ikan.php">Data Ikan</a></li>
              <li><a href="data_beli_admin.php">Data Pembeli</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <div class="container"><br>
      <a href="add_pembeli_admin.php">Tambah data Pembeli</a>
      <div class="label">
      </div>
      <br><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">email</th>
            <th scope="col">no_hp</th>
            <th scope="col">alamat</th>
            <th scope="col">gambar</th>
            <th scope="col">waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php $number = 1;
          foreach ($pembeli as $item) : ?>
            <tr>
              <th scope="row"><?php echo $number ?></th>
              <td><?php echo $item['nama_pembeli']; ?>
              <td><?php echo $item['email']; ?>
              <td><?php echo $item['no_hp']; ?>
              <td><?php echo $item['alamat']; ?>
              <td><?php echo $item['gambar']; ?>
              <td><?php echo $item['waktu']; ?>
              <td>
                <a href="editPembeli.php?id=<?= $item['id'] ?>" class="button">Edit</a>
                <a href="deletePembeli.php?id=<?= $item['id'] ?>" class="button">Hapus</a>
              </td>
            </tr>
          <?php
            $number++;
          endforeach;
          ?>
        </tbody>
      </table>
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