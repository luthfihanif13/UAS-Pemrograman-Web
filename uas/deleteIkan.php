<?php 
require 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM daftar_ikan WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'crud_ikan.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'crud_ikan.php';
        </script>
    ";
}


?>