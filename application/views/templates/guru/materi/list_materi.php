<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('Guru/tambah_materi'); ?>" class="btn btn-primary float-right">Tambah Materi</a>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kelas</th>
                <th>Semester</th>
                <th>Mata Pelajaran</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($materi  as $mg) :
              ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $mg['judul']; ?></td>
                  <td><?php echo $mg['kelas']; ?></td>
                  <td><?php echo $mg['semester']; ?></td>
                  <td><?php echo $mg['nama_mapel']; ?></td>
                  <td>

                    <!-- <a href="<?php echo base_url() ?>Guru/edit_materi/<?php echo $mg['id_materi']; ?>">

                    <button type="button" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                  </button> -->

                    <a href="<?php echo base_url() ?>Guru/detail_materi/<?php echo $mg['id_materi']; ?>">

                    <button type="button" class="btn btn-primary">
                    <i class="fas fa-external-link-alt"></i>
                  </button>
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
