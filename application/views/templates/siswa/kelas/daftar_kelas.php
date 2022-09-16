<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Kelas</th>
                <th>Nama MAPEL</th>
                <th>Semester</th>
                <th>Guru</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($kelas  as $kelas) :
              ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $kelas['code']; ?></td>
                  <td><?php echo $kelas['kelas']; ?></td>
                  <td><?php echo $kelas['nama_mapel']; ?></td>
                  <td><?php echo $kelas['semester']; ?></td>
                  <td><?php echo $kelas['nama']; ?></td>
                  <td>
                    <a href="<?php echo base_url() ?>Siswa/tambah_data/<?php echo $kelas['id_kelas_mapel']; ?>">

                    <button type="button" class="btn btn-primary">
                    <i class="fas fa-external-link-alt"></i>
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
