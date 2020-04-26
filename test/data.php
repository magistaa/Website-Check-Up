<?php
include '../koneksi.php';
$sql = "SELECT * FROM pasien INNER JOIN status ON pasien.id_status=status.id_status";

$res = mysqli_query($connect,$sql);

$pinjam = array();

 while ($data = mysqli_fetch_assoc($res)){
$pinjam[] = $data;
}
include'../aset/header.php';
?>
<div class="container">
 <div class="row mt-4">
  <div class="col-md">
 </div>
 </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Data Pasien <h2>
  </div>
  <div class="card-body">
    <table class="table">

  <thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Alamat</th>
<th scope="col">Tanggal Check Up</th>
<th scope="col">Status</th>
</tr>
</thead>
<?php
$no = 1;
foreach ($pinjam as $p ) { ?>
<tr>
<td scope="row"><?= $no ?></th>
<td><?= $p['nama_pasien']?></th>
<td><?= $p['alamat']?></th>
<td><?= $p['tgl_checkup']?></th>
<td><?= $p['status']?></th> 
  
<?php
  $no++;
}

?>

</table>