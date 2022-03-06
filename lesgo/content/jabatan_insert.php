<?php
if(!defined('INDEX')) die("");
$nama = htmlspecialchars($_POST['nama']);
$query = mysqli_query($con, "INSERT INTO jabatan SET nama_jabatan = '$nama'");

if($query) {
    echo "<script> alert('Data berhasil disimpan'); </script>";
    echo "<meta http-equiv='refresh' content='0;url=?hal=jabatan'>";
    exit;
} else {
    echo "Tidak dapat menyimpan data!";
    echo mysqli_error($con);
}
?>