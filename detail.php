<?php
include 'koneksi.php';
include 'header.php';
$id_data = $_GET['id_data'];
$sql = mysqli_query($connect, "SELECT * FROM data WHERE id_data=$id_data");
$ang = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data ODP</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class=""></i></i>Detail Data ODP</h2>
                </div>
                <div class="card-body">
                <form action="index_odp.php" method="post">
                <table class="table">
                <input type="hidden" name="id_data" value="<?= $ang['id_data'];?>">
                    <tr>
                        <td>Nama</td>
                        <td><?= $ang['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $ang['alamat'];?></td>
                    </tr>
                    <tr>
                        <td>Suhu Badan</td>
                        <td><?= $ang['suhu'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Cek</td>
                        <td><?= $ang['tanggal'];?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <button type="submit" class="btn btn-primary" name="kembali">KEMBALI</button>
                        </th>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
include 'footer.php';
?>