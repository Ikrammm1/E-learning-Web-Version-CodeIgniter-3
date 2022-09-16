<div class="container-fluid">


  <h3 class="m-0 font-weight-bold"><?php echo $id_materi['nama_mapel']; echo " - "; echo $id_materi['nama']; ?></h3>
	<hr>
	<br>

  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Deskripsi</h4>
    </div>
    <div class="card-body">
      <?php echo $this->session->flashdata('pesan'); ?>
      <div class="table-responsive">
        <h6 class="m-0 font-weight"><?php echo $id_materi['keterangan']; ?></h6>
      </div>
    </div>
  </div>

<?php
$no = 1;
foreach ($materi as $ms):

 ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary text-center"><?php echo "Pertemuan ke ", $no++, " - "; echo $ms['judul'];?></h4>
            </div>
            <div class="card-body">
              <?php echo $this->session->flashdata('pesan'); ?>
              <div class="table-responsive">
                <h5 class="m-0 font-weight"><?php echo $ms['konten']; ?></h5> <br/>
                <h6 class="m-0 font-weight"><?php echo $ms['file']; ?></h6>
              </div>
              <div class="card-body">
                    <a
                        class="ml-auto btn btn-outline-primary w-100"
                        target="_blank"
                        href="<?php echo base_url();?>assets/materi/<?php echo $ms['file'];?>"
                        download
                    ><i class="fas fa-sm fa-download"></i> Download File</a>

                </div>
            </div>
          </div>
        </div>
    </div>

</div>
<?php endforeach;
 ?>

</div>
</div>
