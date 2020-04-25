<?php

include 'header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card" style="width: 70rem;">
                <div class="card-header" style="width: 70rem;">
                    <h2 class="card-title"><i class="fas fa-user-plus"></i>Tambah Data ODP</h2>
                </div>
                <div class="card-body">
                <form action="tambah_proses.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value=""></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value=""></td>
                    </tr>
                    <tr>
                        <td>Suhu badan</td>
                        <td><input type="number" name="suhu" id=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal cek</td>
                        <td><input type="date" name="tanggal" id=""></td>
                    </tr>
                    <tr>
                        <th><button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button></th>
                        <th></th>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>