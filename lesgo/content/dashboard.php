<?php
if(!defined('INDEX')) die("");
?>

<div class="row align-items-md-stretch">
  <div class="col-md-12 mt-2">
          <div class="h-100 p-5 bg-light border rounded-3">
            <h1>Hi, <span class="text-danger"><?=$_SESSION["user"];?></span>!</h1>
            <hr>
            <h1 class="display-4">Selamat datang di <span class="text-success font-monospace">PEGAWAI.IN</span></h1>
            <h4 class="display-6">Anda login sebagai <span class="text-danger fst-italic">Administrator</span></h4>
          </div>
  </div>
</div>

<?php 
  $jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
  $jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?>

<div class="row mb-3 pb-3 mt-4">
  <div class="col-sm-6 mb-3">
    <ul class="list-group">
      <li class="list-group-item text-danger">
        <span class="material-icons md-dark" style="font-size:72px;">people</span>
        <span class="display-3 float-end"> <?= $jml_pegawai ?> </span>
      </li>
      <li class="list-group-item bg-danger">
        <a href="?hal=pegawai" class="nav-link text-white">Data Pegawai</a>
      </li>
    </ul>
  </div>
  <div class="col-sm-6 mb-3">
    <ul class="list-group">
      <li class="list-group-item text-success">
        <span class="material-icons md-dark" style="font-size:72px;">sort</span>
        <span class="display-3 float-end"> <?= $jml_jabatan ?> </span>
      </li>
      <li class="list-group-item bg-success">
        <a href="?hal=jabatan" class="nav-link text-white">Data Jabatan</a>
      </li>
    </ul>
  </div>
</div>
