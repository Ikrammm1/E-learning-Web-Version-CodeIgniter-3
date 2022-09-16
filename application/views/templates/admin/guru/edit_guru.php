<div class="container-fluid">

	<h3><?php echo $title; ?></h3>
	<hr>
	<br>


	<form method="post" action="<?php echo base_url('C_Guru/proses_edit_data') ?>">

    <input type="hidden" name="id_guru" value="<?php echo $guru['id_guru']; ?>">

  <div class="form-group row">
    <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="NIP" required value="<?php echo $guru['NIP']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama" required value="<?php echo $guru['nama']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nohp" required="" value="<?php echo $guru['nohp']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-5">
      <div class="form-check">
        <input class="form-check-input" value="Laki-laki" type="radio" name="gender" id="flexRadioDefault1"
        <?php
          if($guru['gender'] == "Laki-laki")  {
            echo "checked";
          }
        ?>
        >
          Laki-Laki
      </div>
      <div class="form-check">
        <input class="form-check-input" value="Perempuan" type="radio" name="gender" id="flexRadioDefault2"
        <?php
          if($guru['gender'] == "Perempuan")  {
            echo "checked";
          }
        ?>
        >
          Perempuan
      </div>
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
