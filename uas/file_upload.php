<?php 
require 'config.php';

if (isset($_POST['upload'])) {
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    
    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $result = mysqli_query($conn, "INSERT INTO file_upload VALUES ('','$gambar_baru')");
        if ($result) {
            echo"
                <script>
                    alert('File berhasil diupload');
                    href.location = 'read_file.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('File gagal diupload');
                </script>
            ";
        }
    }

}


?>
