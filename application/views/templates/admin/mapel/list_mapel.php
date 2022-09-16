<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('C_mapel/tambah_data'); ?>" class="btn btn-primary float-right">Tambah Data</a>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama MAPEL</th>
                <th>Deskripsi</th>
                <th>Semester</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($mapel  as $mapel) :
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $mapel['code']; ?></td>
                  <td><?php echo $mapel['nama_mapel']; ?></td>
                  <td><?php echo $mapel['keterangan']; ?></td>
                  <td><?php echo $mapel['semester']; ?></td>
                  <td>
                    <div>
                    <a href="<?php echo base_url() ?>C_mapel/edit_data/<?php echo $mapel['id_mapel']; ?>">

                    <button type="button" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                  </button>
                  </a>


                    <a href="<?php echo base_url() ?>C_mapel/hapus_data/<?php echo $mapel['id_mapel']; ?>" class="badge badge-danger">
                      <button type="button" class="btn btn-danger" onclick="javascript: return confirm('Data akan dihapus, anda yakin?')">
                        <i class="fas fa-trash"></i>
                      </button>

                  </a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>


</div>
