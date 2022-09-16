<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_mapel/proses_tambah_data') ?>">

    <div class="form-group row">
      <label for="code" class="col-sm-2 col-form-label">Kode</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="code" required="">
      </div>
    </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama MAPEL</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_mapel" required="">
    </div>
  </div>



  <div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="keterangan" required="">
    </div>
  </div>
  <div class="form-group row">
    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="semester" required="">
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
