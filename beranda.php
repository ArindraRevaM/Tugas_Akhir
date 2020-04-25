<?php
include 'koneksi.php';
include 'header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>E-Quarantine</h1>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for=""><h3>Tentang Aplikasi</h3></label>
                            <label for="">Berfungsi untuk mendata orang orang yang sudah memiliki gejala covid 19, apakah orang itu ODP atau PDP atau sudah Positif Covid 19</label>
                            <label for=""><h3>Pembuat</h3></label><br>
                        	<label for="">
                             <li>Arindra Reva Maulana</li>   
                             <li>Kelas X RPL 4</li>
                             <li>Nomor absen 07</li>
                            </label>
                        </div>
                        <div>
                        	<button type="submit" class="btn btn-success" name="kembali">kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>