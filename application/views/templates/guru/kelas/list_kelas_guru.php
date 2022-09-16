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
        <div class="row pl-4 pr-4">
       <?php
       $no = 1;

       foreach ($kelas_guru  as $kelas_guru) :
       ?>
       <a href="<?php echo base_url() ?>Guru/detail_kelas/<?php echo $kelas_guru['id_kelas_mapel']; ?>">
       <div class="card  mr-5 mb-3 " style="width: 18rem;">
         <img class="card-img-top" src="<?= base_url('assets/_image/'); echo $kelas_guru['gambar']; ?>" alt="Card image cap">
         <div class="card-body">
       </a>
           <h5 class="card-title "><?php echo $kelas_guru['nama_mapel']; echo " - "; echo $kelas_guru['kelas']; ?></h5>
           <p class="card-text"><?php echo $kelas_guru['code']; ?></p>

           <a href="<?php echo base_url() ?>Guru/edit_data/<?php echo $kelas_guru['id_kelas_mapel']; ?>">

           <button type="button" class="btn btn-warning"> Edit
             <i class="fas fa-sign-out-alt"></i>
           </button>
         </a>

         </div>
       </div>


       <?php endforeach; ?>

     </div>


        <!-- <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Kelas</th>
                <th>Nama MAPEL</th>
                <th>Semester</th>
                <th>Token</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($kelas_guru  as $kelas_guru) :
              ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $kelas_guru['code']; ?></td>
                  <td><?php echo $kelas_guru['kelas']; ?></td>
                  <td><?php echo $kelas_guru['nama_mapel']; ?></td>
                  <td><?php echo $kelas_guru['semester']; ?></td>
                  <td><?php echo $kelas_guru['token']; ?></td>
                  <td>

                    <a href="<?php echo base_url() ?>Guru/edit_data/<?php echo $kelas_guru['id_kelas_mapel']; ?>">

                    <button type="button" class="btn btn-warning">
                      <i class="fas fa-edit"></i>
                    </button>
                  </a>
                <a href="<?php echo base_url() ?>Guru/detail_kelas/<?php echo $kelas_guru['id_kelas_mapel']; ?>">

                <button type="button" class="btn btn-primary">
                <i class="fas fa-external-link-alt"></i>
              </button>
                </a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div> -->
      </div>
    </div>
</div>


</div>
