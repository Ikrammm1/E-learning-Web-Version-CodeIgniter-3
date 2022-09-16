<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_siswa/proses_tambah_data') ?>">

    <div class="form-group row">
      <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="NISN" required>
      </div>
    </div>

  <div class="form-group row">
    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_siswa" required>
    </div>
  </div>



  <div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">Nohp</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nohp" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-5">
      <div class="form-check">
        <input class="form-check-input" value="Laki-laki" type="radio" name="gender" id="flexRadioDefault1">
          Laki-Laki
      </div>
      <div class="form-check">
        <input class="form-check-input" value="Perempuan" type="radio" name="gender" id="flexRadioDefault2" >
          Perempuan
      </div>
    </div>
  </div>
<div class="form-group row">
	<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
	<div class="col-sm-5">
		<select class="form-control" name="jurusan" aria-label="Default">
		  <option value="Otomotif" selected>Otomotif</option>
		  <option value="ATP">ATP</option>
		  <option value="ATPH">ATPH</option>
			<option value="Multimedia">Multimedia</option>
		</select>
	</div>
</div>
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
