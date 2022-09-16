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
      <form method="post" action="<?php echo base_url('Siswa/proses_edit_profile') ?>">

        <div class="table-responsive">
          <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
          <tbody>
            <?php
            foreach ($siswa  as $ps) :
            ?>
            <input type="hidden" name="id_siswa" value="<?php echo $ps['id_siswa']; ?>">
            <input type="hidden" name="id_user" value="<?php echo $ps['id_user']; ?>">
            <tr>
              <td>NISN</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="NISN" required="" value="<?php echo $ps['NISN']; ?>">
            			</div>
            		</div>
              </td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="nama_siswa" required="" value="<?php echo $ps['nama_siswa']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="nohp" required="" value="<?php echo $ps['nohp']; ?>">
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
                        if($ps['gender'] == "Laki-laki")  {
                          echo "checked";
                        }
                      ?>
                      >
                        Laki-Laki
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="Perempuan" type="radio" name="gender" id="flexRadioDefault2"
                      <?php
                        if($ps['gender'] == "Perempuan")  {
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
              <td>Jurusan</td>
              <td>
                <div class="form-group row">
                  <div class="col-sm-5">
                    <select class="form-control" name="jurusan" aria-label="Default">
                      <option value="Otomotif"
                      <?php
                        if($ps['jurusan'] == "otomotif")  {
                          echo "selected";
                        }
                      ?>
                      >Otomotif</option>
                      <option value="ATP"
                      <?php
                        if($ps['jurusan'] == "ATP")  {
                          echo "selected";
                        }
                      ?>
                      >ATP</option>
                      <option value="ATPH"
                      <?php
                        if($ps['jurusan'] == "ATPH")  {
                          echo "selected";
                        }
                      ?>
                      >ATPH</option>
                      <option value="Multimedia"
                      <?php
                        if($ps['jurusan'] == "multimedia")  {
                          echo "selected";
                        }
                      ?>
                      >Multimedia</option>
                    </select>
                  </div>
                </div>

              </td>
            </tr>

            <tr>
              <td>username</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="text" class="form-control" name="username" required="" value="<?php echo $ps['username']; ?>">
            			</div>
            		</div>

              </td>
            </tr>
            <tr>
              <td>Password</td>
              <td>
                <div class="form-group row">
            			<div class="col-sm-5">
            				<input type="password" class="form-control" name="password" required="" value="<?php echo $ps['password']; ?>">
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
