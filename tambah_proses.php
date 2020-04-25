<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $suhu=$_POST['suhu'];
    $tanggal=$_POST['tanggal'];

    $sql="INSERT INTO data (nama, alamat, suhu, tanggal) 
          VALUES ('$nama', '$alamat', '$suhu', '$tanggal')";

    $res=mysqli_query($connect, $sql);
    $count=mysqli_affected_rows($connect);
    header("location: index_odp.php");
    
}else {
    header ("location: tambah.php");
}

include 'header.php';
?>