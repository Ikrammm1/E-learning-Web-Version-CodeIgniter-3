<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('Home/tambah_data'); ?>" class="btn btn-primary float-right">Tambah Data</a>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>nama</th>
                <th>nim</th>
                <th>alamat</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($mahasiswa  as $mhs) :
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $mhs['nama']; ?></td>
                  <td><?php echo $mhs['nim']; ?></td>
                  <td><?php echo $mhs['alamat']; ?></td>
                  <td>
                    <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $mhs['id']; ?>" class="badge badge-primary">Edit</a>

                    <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $mhs['id']; ?>" class="badge badge-danger">Hapus</a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

</div>