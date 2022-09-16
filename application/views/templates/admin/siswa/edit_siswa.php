<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_siswa/proses_edit_data') ?>">

    <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa']; ?>">

  <div class="form-group row">
    <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="NISN" required="" value="<?php echo $siswa['NISN']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_siswa" required="" value="<?php echo $siswa['nama_siswa']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nohp" required="" value="<?php echo $siswa['nohp']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-5">
      <div class="form-check">
        <input class="form-check-input" value="Laki-laki" type="radio" name="gender" id="flexRadioDefault1"
        <?php
          if($siswa['gender'] == "Laki-laki")  {
            echo "checked";
          }
        ?>
        >
          Laki-Laki
      </div>
      <div class="form-check">
        <input class="form-check-input" value="Perempuan" type="radio" name="gender" id="flexRadioDefault2"
        <?php
          if($siswa['gender'] == "Perempuan")  {
            echo "checked";
          }
        ?>
        >
          Perempuan
      </div>
    </div>
  </div>
	<div class="form-group row">
		<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
		<div class="col-sm-5">
			<select class="form-control" name="jurusan" aria-label="Default">
				<option value="Otomotif"
				<?php
          if($siswa['jurusan'] == "otomotif")  {
            echo "selected";
          }
        ?>
				>Otomotif</option>
			  <option value="ATP"
				<?php
          if($siswa['jurusan'] == "ATP")  {
            echo "selected";
          }
        ?>
				>ATP</option>
			  <option value="ATPH"
				<?php
          if($siswa['jurusan'] == "ATPH")  {
            echo "selected";
          }
        ?>
				>ATPH</option>
				<option value="Multimedia"
				<?php
          if($siswa['jurusan'] == "multimedia")  {
            echo "selected";
          }
        ?>
				>Multimedia</option>
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
