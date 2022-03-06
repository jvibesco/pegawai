<?php
session_start();
require "library/config.php";

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} else {
    define('INDEX', true);
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" />
    <style>
    .list-group-item:hover {
    background-color: #525252 !important
    }
    </style>
  </head>

  <body class="h-100">
    <!-- header kalo misalnya di layar handphone -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <i class="material-icons md-dark float-start" style="font-size: 32px">polymer</i>&ensp;PEGAWAI.IN</a>
        <button class="navbar-toggler d-block d-sm-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav d-block d-sm-none">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?hal=dashboard"> <span class="material-icons md-dark float-start">dashboard</span>&nbsp;Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?hal=pegawai"> <span class="material-icons md-dark float-start">person</span>&nbsp;Data Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?hal=jabatan"> <span class="material-icons md-dark float-start">sort</span>&nbsp;Data Jabatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php"> <span class="material-icons md-dark float-start">logout</span>&nbsp;Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- sidebar dan konten -->
    <div class="container-fluid h-100">
      <div class="row h-100">
        <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=dashboard"><span class="material-icons md-dark float-start">dashboard</span>&nbsp;Dashboard </a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=pegawai"> <span class="material-icons md-dark float-start">person</span>&nbsp;Data Pegawai </a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=jabatan"> <span class="material-icons md-dark float-start">sort</span>&nbsp;Data Jabatan </a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="logout.php"> <span class="material-icons md-dark float-start">logout</span>&nbsp;Keluar </a>
            </li>
          </ul>
        </nav>

        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3 pb-5">
          <section>
            <?php include "konten.php"; ?>
          </section>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="bg-light py-1 fixed-bottom">
      <p class="m-1 text-center text-muted">&copy; 2022 Copyright: Jordan Vibesco</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
  </body>
</html>
