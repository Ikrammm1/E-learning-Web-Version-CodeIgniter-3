<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<!-- <form method="post" action="<?php echo base_url('Guru/proses_tambah_materi') ?>"> -->
<?php echo form_open_multipart('Guru/proses_tambah_materi'); ?>

		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="judul" required="">
			</div>
		</div>

		<div class="form-group row">
			<label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
			<div class="col-sm-5">
				<select class="form-control" name="id_kelas_mapel" aria-label="Default">
					<option value="" selected></option>
					<?php
					foreach ($referen_mapel as $tm):
					 ?>
				  <option value="<?php echo $tm['id_kelas_mapel']; ?>"><?php echo $tm['nama_mapel']; echo " - ", $tm['kelas'];?></option>

				<?php endforeach ?>
				</select>
			</div>
		</div>


	<div class="form-group row">
		<label for="file" class="col-sm-2 col-form-label">File</label>
		<div class="col-sm-5">
			<input type="file" class="form-control" name="file"  multiple>
		</div>
	</div>
	<div class="form-group row">
		<label for="konten" class="col-sm-2 col-form-label">konten</label>
		<div class="col-sm-5">
			<textarea type="text" class="form-control" name="konten" required="">

			</textarea>
		</div>
	</div>
  <!-- <div class="form-group row">
    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="semester" required="" >
    </div>
  </div> -->

  <div class="form-group row">
    <label for="button" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-success">Tambah</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
<?php echo form_close() ?>
<!-- </form> -->

</div>
</div>
