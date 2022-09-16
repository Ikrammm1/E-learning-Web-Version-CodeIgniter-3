<div class="container-fluid">


  <h3 class="m-0 font-weight-bold"><?php echo $id_materi['judul']; ?></h3>
	<hr>
	<br>

  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Deskripsi</h4>
    </div>
    <div class="card-body">
      <?php echo $this->session->flashdata('pesan'); ?>
      <div class="table-responsive">
        <h6 class="m-0 font-weight"><?php echo $id_materi['konten']; ?></h6>
      </div>
    </div>
  </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary text-center">File Download</h4>
            </div>
            <div class="card-body">
              <?php echo $this->session->flashdata('pesan'); ?>
              <div class="table-responsive">
                <h6 class="m-0 font-weight"><?php echo $id_materi['file']; ?></h6>
              </div>
              <div class="card-body">
                    <a
                        class="ml-auto btn btn-outline-primary w-100"
                        target="_blank"
                        href="<?php echo base_url();?>assets/materi/<?php echo $id_materi['file'];?>"
                        download
                    ><i class="fas fa-sm fa-download"></i> Download File</a>

                </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary text-center">Edit FIle Materi</h4>
            </div>
            <div class="card-body">
              <?php echo $this->session->flashdata('pesan'); ?>
              <div class="table-responsive">
                <h6 class="m-0 font-weight"><?php echo $id_materi['file']; ?></h6>
              </div>
              <div class="card-body">
                  <a
                      href="<?php echo base_url() ?>Guru/edit_materi/<?php echo $id_materi['id_materi']; ?>"
                      class="btn btn-outline-warning mb-2 w-100"
                  >
                      <i class="fas fa-pen fa-sm mr-1"></i>Update
                  </a>
                  <a
                  href="<?php echo base_url(); ?>Guru/hapus_data/<?php echo $id_materi['id_materi'];?>
                  ">
                  <button

                      class="btn btn-outline-danger w-100">
                      <i class="fas fa-trash fa-sm mr-1"></i>Hapus
                  </button>
                </a>

              </div>
            </div>
          </div>
        </div>
    </div>

</div>

</div>
</div>
