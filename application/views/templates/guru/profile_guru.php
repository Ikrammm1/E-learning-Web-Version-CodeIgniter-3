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
            foreach ($guru  as $pg) :
            ?>
            <tr>
              <td>NIP</td>
              <td><?php echo $pg['NIP']; ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><?php echo $pg['nama']; ?></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td><?php echo $pg['nohp']; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $pg['gender']; ?></td>
            </tr>
            <tr>
              <td>username</td>
              <td><?php echo $pg['username']; ?></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><?php echo md5($pg['password']); ?></td>
            </tr>
          <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <div class="form-group row">
          <label for="update" class="col-sm-8 col-form-label"></label>
          <div class="col-sm-8">
            <a href="<?php echo base_url('Guru/update_profile'); ?>">
            <button  class="btn btn-warning">Edit Profile</button>
          </a>
          </div>
        </div>
      </div>
    </div>
</div>


</div>
