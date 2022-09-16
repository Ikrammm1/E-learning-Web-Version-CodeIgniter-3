<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->

<h4 class="m-0 font-weight-bold"><?php echo "Selamat Datang, Admin!!"; ?></h4>
  <br>
    <div class="card shadow mb-4">
      <!-- konten -->
    </br>
          <div class="container">
            <div class="row">
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      Total Guru</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                                      <?php
                                      echo $total;
                                       ?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Siswa</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    echo $total_s;
                                     ?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-users fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Kelas
                                  </div>
                                  <div class="row no-gutters align-items-center">
                                      <div class="col-auto">
                                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php
                                            echo $total_k;
                                             ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-university fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Mata Pelajaran
                                  </div>
                                  <div class="row no-gutters align-items-center">
                                      <div class="col-auto">
                                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <?php
                                            echo $total_m;
                                             ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
        </div>

          <div class="row">
              <div class="col-xl-6 col-lg-7">
                  <div class="card shadow mb-4">
                      <div
                          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">List Guru</h6>
                      </div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">NIP</th>
                                      <th scope="col">Nama</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;

                                foreach ($guru as $guru) :
                                ?>
                                  <tr>
                                      <th scope="row"><?php echo $guru['NIP']; ?></th>
                                      <td><?php echo $guru['nama']; ?></td>
                                  </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                          <a href="<?php echo base_url("C_Guru/daftar_guru");?>" class="btn btn-outline-primary w-100">
                              <i class="fas fa-sm fa-external-link-alt mr-1"></i>
                              Lihat Semua
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-5">
                  <div class="card shadow mb-4">
                      <div
                          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">List Siswa</h6>
                      </div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                                  <tr>

                                      <th scope="col">NISN</th>
                                      <th scope="col">Nama</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no = 1;

                                foreach ($siswa as $siswa) :
                                ?>
                                  <tr>
                                      <th scope="row"><?php echo $siswa['NISN']; ?></th>
                                      <td><?php echo $siswa['nama_siswa']; ?></td>
                                  </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                          <a href="<?php echo base_url("C_siswa/daftar_siswa");?>" class="btn btn-outline-primary w-100">
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
