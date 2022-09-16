<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('C_Guru/tambah_data'); ?>" class="btn btn-primary float-right">Tambah Data</a>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>gender</th>
                <th>NO HP</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($guru as $guru) :
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $guru['NIP']; ?></td>
                  <td><?php echo $guru['nama']; ?></td>
                  <td><?php echo $guru['gender']; ?></td>
                  <td><?php echo $guru['nohp']; ?></td>
                  <td>
                    <div>
                    <a href="<?php echo base_url() ?>C_guru/edit_data/<?php echo $guru['id_guru']; ?>">

                    <button type="button" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                  </button>
                  </a>


                    <a href="<?php echo base_url() ?>C_guru/hapus_data/<?php echo $guru['id_guru']; ?>" class="badge badge-danger">
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
