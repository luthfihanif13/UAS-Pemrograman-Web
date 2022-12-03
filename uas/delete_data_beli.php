<?php 
require 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'data_beli_admin.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'data_beli_admin.php';
        </script>
    ";
}


?>