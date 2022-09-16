<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('Siswa/proses_tambah_kelas') ?>">

    <input type="hidden" name="id_kelas_mapel" value="<?php echo $id_kelas['id_kelas_mapel']; ?>">
		<input type="hidden" name="NISN" value="<?php echo $this->session->userdata('username')?>">


		<div class="form-group row">
			<label for="token" class="col-sm-2 col-form-label">Token</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="token" required="" value="<?php echo $id_kelas['token']; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="kelas" required="" value="<?php echo $id_kelas['kelas']; ?>" disabled>
			</div>
		</div>


  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-success"
			<?php
			if ("token" == $id_kelas['token']) {
				echo "token benar";
			} else {
				echo "token salah";
			}
			 ?>

			 >Masuk Kelas</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
</div>

</form>

</div>
