<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="./_css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
  <div class="global_container ">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide col-6" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/_image/bg_smk.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/_image/bg2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/_image/bg3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- <img src="./assets/_image/bg_smk.jpg" class="col-6"> -->
    <div class="card col-4 bg-light ">
      <div class=" card-header text-center  bg-light">
        <h2>E - Learning SMKN 2 Barabai</h2>
      </div>
  <div class=" card-body shadow  bg-light">
        <form method="post" action="<?= base_url('Welcome/login_aksi');?>">
      <div class="form-group row py-3">
        <label for="username" class="col-3 col-form-label">Username</label>
        <div class="col-9">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <!-- <small><span class="text-danger"><?= form_error('username'); ?></span></small> -->
        </div>
      </div>
      <div class="form-group row">
        <label for="Password" class="col-3 col-form-label">Password</label>
        <div class="col-9">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-3 pt-0">User</legend>
          <div class="col-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="level"  value="admin" checked>
              <label class="form-check-label" for="gridRadios1">
                Admin
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="level"  value="guru">
              <label class="form-check-label" for="gridRadios2">
                Guru
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="level" value="siswa">
              <label class="form-check-label" for="gridRadios3">
                Siswa
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row ">
        <div class=" col-12">
          <button type="submit" class="btn btn-primary col-12">Login</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>
