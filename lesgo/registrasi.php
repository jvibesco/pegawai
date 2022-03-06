<?php
require "library/config.php";
if(isset($_POST["daftar"])) {
    if(registrasi($_POST) > 0) {
        echo "<script> alert('kamu berhasil mendaftar!'); </script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    } 
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body class="h-100 bg-light d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4 border">
                <h3 class="text-center text-success pb-3 mb-3 border-bottom"><i class="material-icons md-dark" style="font-size: 36px;">polymer</i>&nbsp;Pegawai.in</h3>
                <?php if(isset($error)): ?>
                    <p style="color: red; font-style:italic;">username/password salah!</p>
                    <?= "<meta http-equiv='refresh' content='1; url=login.php'>"; ?>
                <?php endif; ?>
                <form action="" method="POST">
                    <input type="text" class="form-control form-control-lg mb-3" placeholder="Nama Lengkap" id="nama" name="nama">
                    <input type="text" class="form-control form-control-lg mb-3" placeholder="Username" id="username" name="username">
                    <input type="password" class="form-control form-control-lg mb-3" placeholder="Password" name="password" id="password">
                    <input type="password" class="form-control form-control-lg mb-3" placeholder="Konfirmasi Password" name="password2" id="password2">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" type="submit" name="daftar">Daftar</button>
                    </div>
                    <p class="mt-3">Sudah punya akun? <a href="login.php" style="text-decoration: none;">Masuk sekarang!</a></p>                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>