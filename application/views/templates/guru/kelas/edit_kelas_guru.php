<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('Guru/proses_edit_data') ?>">

    <input type="hidden" name="id_kelas_mapel" value="<?php echo $id_kelas['id_kelas_mapel']; ?>">


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
			<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
			<div class="col-sm-5">
				<input type="file" class="form-control" name="gambar"  value="<?php echo $id_kelas['gambar']; ?>" multiple>
				<a target="_blank" href="<?= base_url('assets/_image/'); echo $id_kelas['gambar']; ?>">
				<img class="card-img-top col-4" src="<?= base_url('assets/_image/'); echo $id_kelas['gambar']; ?>" alt="Card image cap">
				<?php echo $id_kelas['gambar']; ?>
			</a>
			</div>
		</div>


  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-success">Ubah</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
</div>

</form>

</div>
