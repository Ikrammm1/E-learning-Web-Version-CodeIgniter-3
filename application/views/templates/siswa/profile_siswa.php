<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="text-primary font-weight-bold">Data Pribadi</h4>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
          <tbody>
            <?php
            foreach ($siswa  as $sw) :
            ?>
            <tr>
              <td>NISN</td>
              <td><?php echo $sw['NISN']; ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><?php echo $sw['nama_siswa']; ?></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td><?php echo $sw['nohp']; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $sw['gender']; ?></td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td><?php echo $sw['jurusan']; ?></td>
            </tr>
            <tr>
              <td>username</td>
              <td><?php echo $sw['username']; ?></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><?php echo md5($sw['password']); ?></td>
            </tr>
          <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <div class="form-group row">
          <label for="update" class="col-sm-8 col-form-label"></label>
          <div class="col-sm-8">
            <a href="<?php echo base_url('Siswa/update_profile'); ?>">
            <button  class="btn btn-warning">Edit Profile</button>
          </a>
          </div>
        </div>

      </div>
    </div>
</div>


</div>
