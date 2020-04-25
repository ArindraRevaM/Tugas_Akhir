<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_data            =$_POST['id_data'];
    $nama               =$_POST['nama'];
    $alamat             =$_POST['alamat'];
    $suhu               =$_POST['suhu'];
    $tanggal            =$_POST['tanggal'];

    $sql=mysqli_query($connect, "UPDATE data SET nama='$nama',
                                                alamat='$alamat',
                                                suhu='$suhu',
                                                tanggal='$tanggal'WHERE id_data = $id_data");

    echo "<script>
            alert('Data Berhasil Diubah');
            window.location='index_odp.php'
          </script>";
}else {
    echo "<script>
            alert('Data Berhasil Diubah');
            window.location='edit.php'
          </script>";
}
?>