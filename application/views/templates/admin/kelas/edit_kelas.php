<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_kelas/proses_edit_data') ?>">

    <input type="hidden" name="id_kelas_mapel" value="<?php echo $id_kelas['id_kelas_mapel']; ?>">

		<div class="form-group row">
			<label for="code" class="col-sm-2 col-form-label">Kode</label>
			<div class="col-sm-5">
				<select class="form-control" name="id_mapel" aria-label="Default">
					<!-- <option value="" selected></option> -->
					<?php
					foreach ($datamapel as $dm):
					 ?>
					<option value=" <?php echo $dm['id_mapel']; ?>"
						<?php
						if($id_kelas['id_mapel'] == $dm['id_mapel'])
						{

					echo 'selected' ;
				} ?>
						><?php echo $dm['code']; ?></option>

				<?php endforeach ?>
				</select>
			</div>
		</div>


		<div class="form-group row">
			<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="kelas" required="" value="<?php echo $id_kelas['kelas']; ?>">
			</div>
		</div>


		<div class="form-group row">
		<label for="guru" class="col-sm-2 col-form-label">Guru</label>
		<div class="col-sm-5">
			<select class="form-control" name="NIP" aria-label="Default">
				<?php
				foreach ($dataguru as $dg):
				 ?>
				<option value="<?php echo $dg['NIP']; ?>"
					<?php
					if($id_kelas['NIP'] == $dg['NIP'])
					{

				echo 'selected' ;
			} ?>
					><?php echo $dg['nama']; ?></option>

			<?php endforeach ?>
			</select>
		</div>
		</div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-success">Ubah</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>

</form>

</div>
</div>
