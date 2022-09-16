<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->
<?php
foreach ($guru as $guru):
 ?>
<h4 class="m-0 font-weight-bold"><?php echo "Selamat Datang ", $guru['nama'] ; ?></h4>
<?php endforeach; ?>
  <br>
    <div class="card shadow mb-4">
      <!-- konten -->
    </br>
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Total Kelas</div>

                                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                                      <?php
                                      echo $total;
                                       ?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-5 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Materi</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    echo $totalmateri;
                                     ?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-book fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>

          <div class="row">
              <div class="col-6 pl-5">
                  <div class="card shadow mb-4">
                      <div
                          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">List Kelas</h6>
                      </div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Mata Pelajaran</th>
                                      <th scope="col">Semester</th>
                                      <th scope="col">Kelas</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;

                                foreach ($kelas_guru as $kelas_guru) :
                                ?>
                                  <tr>
                                      <td><?php echo $no++;?></td>


                                      <td><?php echo $kelas_guru['nama_mapel']; ?></td>
                                      <td><?php echo $kelas_guru['semester']; ?></td>
                                      <td><?php echo $kelas_guru['kelas']; ?></td>

                                  </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                          <a href="<?php echo base_url("Guru/daftar_kelas");?>" class="btn btn-outline-primary w-100">
                              <i class="fas fa-sm fa-external-link-alt mr-1"></i>
                              Lihat Semua
                          </a>
                      </div>
                  </div>
              </div>

              <div class="col-6 pr-5">
                  <div class="card shadow mb-4">
                      <div
                          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">List Materi</h6>
                      </div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Mata Pelajaran</th>
                                      <th scope="col">Kelas</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;

                                foreach ($materi_guru as $mg) :
                                ?>
                                  <tr>
                                      <td><?php echo $no++;?></td>


                                      <td><?php echo $mg['judul']; ?></td>
                                      <td><?php echo $mg['nama_mapel']; ?></td>
                                      <td><?php echo $mg['kelas']; ?></td>

                                  </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                          <a href="<?php echo base_url("Guru/daftar_materi");?>" class="btn btn-outline-primary w-100">
                              <i class="fas fa-sm fa-external-link-alt mr-1"></i>
                              Lihat Semua
                          </a>
                      </div>
                  </div>
              </div>


          </div>
        </div>

        </div>
      </div>
