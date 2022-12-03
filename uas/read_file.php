<?php 
require 'config.php';

$result = mysqli_query($conn, "SELECT * FROM file_upload");
$file = [];

while ($row = mysqli_fetch_assoc($result)) {
    $file[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Gambar</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama File</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($file as $gambar): ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="img/<?= $gambar['nama_file'] ?>" width="50" height="50"></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </table>
</body>
</html>