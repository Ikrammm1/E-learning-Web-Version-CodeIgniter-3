<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="text-primary font-weight-bold">Edit Profile</h4>
      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
      <form method="post" action="<?php echo base_url('Guru/proses_edit_profile') ?>">

        <div class="table-responsive">
          <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
          <tbody>
            <?php
            foreach ($guru  as $pg) :
            ?>
            <input type="hidden" name="id_guru" value="<?php echo $pg['id_guru']; ?>">
            <input type="hidden" name="id_user" value="<?php echo $pg['id_user']; ?>">
            <tr>
              <td>NIP</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="NIP" required="" value="<?php echo $pg['NIP']; ?>">
            			</div>
            		</div>
              </td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="nama" required="" value="<?php echo $pg['nama']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="nohp" required="" value="<?php echo $pg['nohp']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>

                <div class="form-group row">
                  <div class="col-sm-5">
                    <div class="form-check">
                      <input class="form-check-input" value="Laki-laki" type="radio" name="gender" id="flexRadioDefault1"
                      <?php
                        if($pg['gender'] == "Laki-laki")  {
                          echo "checked";
                        }
                      ?>
                      >
                        Laki-Laki
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="Perempuan" type="radio" name="gender" id="flexRadioDefault2"
                      <?php
                        if($pg['gender'] == "Perempuan")  {
                          echo "checked";
                        }
                      ?>
                      >
                        Perempuan
                    </div>
                  </div>
                </div>

              </td>
            </tr>
            <tr>
              <td>username</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="username" required="" value="<?php echo $pg['username']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
            <tr>
              <td>Password</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="password" class="form-control" name="password" required="" value="<?php echo $pg['password']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
          <?php endforeach; ?>

            </tbody>
          </table>
        </div>

        <div class="form-group row">
          <label for="update" class="col-sm-8 col-form-label"></label>
          <div class="col-sm-8">

            <button type="submit" class="btn btn-success">Update</button>

          </div>
        </div>
        </form>
      </div>
    </div>
</div>


</div>
