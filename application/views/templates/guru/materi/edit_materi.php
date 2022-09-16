<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('Guru/proses_edit_materi') ?>">

    <input type="hidden" name="id_materi" value="<?php echo $id_materi['id_materi']; ?>">


		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="judul" required="" value="<?php echo $id_materi['judul']; ?>">
			</div>
		</div>

		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">File</label>
			<div class="col-sm-5">
				<input type="file" class="form-control" name="file"  value="<?php echo $id_materi['file']; ?>" multiple>
				<?php echo $id_materi['file']; ?>
			</div>
		</div>

		<div class="form-group row">
			<label for="konten" class="col-sm-2 col-form-label">konten</label>
			<div class="col-sm-5">
				<textarea type="text" class="form-control" name="konten" required="">
					<?php echo $id_materi['konten']; ?>
				</textarea>
			</div>
		</div>
		<!-- <div class="form-group row">
			<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="kelas" required="" value="<?php echo $id_materi['kelas']; ?>">
			</div>
		</div> -->


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
