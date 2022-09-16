<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_mapel/proses_edit_data') ?>">

    <input type="hidden" name="id_mapel" value="<?php echo $mapel['id_mapel']; ?>">

  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Kode</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="code" required="" value="<?php echo $mapel['code']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama_mapel" class="col-sm-2 col-form-label">Nama MApel</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_mapel" required="" value="<?php echo $mapel['nama_mapel']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="keterangan" required="" value="<?php echo $mapel['keterangan']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="semester" required="" value="<?php echo $mapel['semester']; ?>">
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
