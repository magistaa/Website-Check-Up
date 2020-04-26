<?php 

include '../aset/header.php';
include '../koneksi.php';
$query=mysqli_query($connect,"SELECT * FROM status")

?>


<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Simpan Hasil Tes</h2>
    </div>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="anggota">Nama</label>
                 <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                 <label for="kelas">Alamat</label>
                 <input type="text" class="form-control" name="alamat" id="alamat"  placeholder="Masukkan Alamat">
                </div>  

                <div class="form-group">
                 <label for="anggota">Tanggal Check Up</label>
                 <input type="date" class="form-control" name="tgl_checkup" id="tgl_checkup">
                </div>

                <div class="form-group">
                 <label for="status">Status</label>
                  <select style="width: 200px" name="id_status">
                   <option value="">--- Pilih Status ---</option>
                   <?php
                      while($status = mysqli_fetch_assoc($query)):
                   ?>
                   <option value="<?php echo $status ['id_status']; ?>"><?php echo $status['status']; ?></option>
                   <?php
                       endwhile;
                    ?>         
                </select>
                </div>





                
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    






<?php

include '../aset/footer.php';

?>