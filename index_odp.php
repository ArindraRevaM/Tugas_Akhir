<?php

include 'koneksi.php';

$sql = "SELECT * FROM data ORDER BY nama";

$res=mysqli_query($connect, $sql);

$odp=array();

while ($data=mysqli_fetch_assoc($res)) {
	$odp[]=$data;
}

include 'header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  <div class="card-header">
    <h5 class="card-title"><i class=""></i>Data ODP</h5>
  </div>
  <div class="card-body">
  <center><a href="tambah.php">Tambah_Data</a></center>
  	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col" width="50">No</th>
      <th scope="col" width="200">Nama</th>
      <th scope="col" width="200">Alamat</th>
      <th scope="col" width="100">Suhu</th>
      <th scope="col" width="100">Tanggal cek</th>
      <th scope="col" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    	$no = 1;
    	foreach($odp as $p) { ?>

    		<tr>
    			<th scope="row"><?= $no ?></th>
    			<td><?= $p['nama'] ?></td>
    			<td><?= $p['alamat'] ?></td>
    			<td><?= $p['suhu'] ?></td>
          <td><?= $p['tanggal'] ?></td>
    			<td>
				<a href="detail.php?id_data=<?php echo $p['id_data']; ?>" class="badge badge-success">Detail</a>
				<a href="edit.php?id_data=<?php echo $p['id_data']; ?>" class="badge badge-danger">Edit</a>
				<a href="hapus.php?id_data=<?php echo $p['id_data']; ?>" class="badge badge-warning">Hapus</a>
    			</td>
    		</tr>
    <?php 
	$no++;
}
    ?>
    </tbody>
</table>
  </div>
</div>

<?php
include 'footer.php';
?>