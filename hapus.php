<?php
include 'koneksi.php';

$id_data=$_GET['id_data'];
mysqli_query($connect, "DELETE FROM data WHERE id_data=$id_data");

echo "<script> 
        alert('Data Berhasil Dihapus');
        window.location='index_odp.php'
      </script>";
?>