<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_kelas/proses_tambah_data') ?>">

		<div class="form-group row">
			<label for="code" class="col-sm-2 col-form-label">Kode</label>
			<div class="col-sm-5">
				<select class="form-control" name="id_mapel" aria-label="Default">
					<option value="" selected></option>
					<?php
					foreach ($datamapel as $dm):
					 ?>
				  <option value="<?php echo $dm['id_mapel']; ?>"><?php echo $dm['code']; ?></option>

				<?php endforeach ?>
				</select>
			</div>
		</div>


		<div class="form-group row">
      <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="kelas" required="">
      </div>
    </div>




  <div class="form-group row">
    <label for="guru" class="col-sm-2 col-form-label">Guru</label>
    <div class="col-sm-5">
			<select class="form-control" name="NIP" aria-label="Default">
				<option value="" selected></option>
				<?php
				foreach ($dataguru as $dg):
				 ?>
				<option value="<?php echo $dg['NIP'];?>">
					<?php echo $dg['nama']; ?>
				</option>
				<?php endforeach ?>
			</select>
    </div>
  </div>
	<input type="hidden" name="gambar" value="<?php echo 'defauld_class.jpg'; ?>">


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

</form>

</div>
</div>
