<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
  <!-- Page Heading -->

  <head>
    <!-- DataTables -->


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('Siswa/daftar_kelas_full'); ?>" class="btn btn-primary float-right">Tambah Kelas</a>
      </div>
      <div class="card-body vh-100">
        <?php echo $this->session->flashdata('pesan'); ?>
         <div class="row pl-4 pr-4">
        <?php
        $no = 1;

        foreach ($kelas_siswa  as $ks) :
        ?>
        <a href="<?php echo base_url() ?>Siswa/detail_kelas/<?php echo $ks['id_kelas_siswa']; ?>">
        <div class="card  mr-5 mb-3 " style="width: 18rem;">
          <img class="card-img-top" src="<?= base_url('assets/_image/');?>defauld_class.jpg" alt="Card image cap">
          <div class="card-body">
        </a>
            <h5 class="card-title "><?php echo $ks['nama_mapel']; echo " - "; echo $ks['kelas']; ?></h5>
            <p class="card-text"><?php echo $ks['nama']; ?></p>
            <a href="<?php echo base_url() ?>Siswa/hapus_data/<?php echo $ks['id_kelas_siswa']; ?>" class="badge badge-danger">
              <button type="button" class="btn btn-danger" onclick="javascript: return confirm('Data akan dihapus, anda yakin?')">Keluar
                <i class="fas fa-sign-out-alt"> </i>
              </button>
            </a>

          </div>
        </div>


        <?php endforeach; ?>

      </div>


      </div>
    </div>
</div>


</div>
