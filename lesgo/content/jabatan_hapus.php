<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "DELETE FROM jabatan WHERE id_jabatan = '$_GET[id]'");

if($query) {
    echo "<script> alert('Data berhasil dihapus!'); </script>";
    echo "<meta http-equiv='refresh' content='0;url=?hal=jabatan'>";
} else {
    echo "<script> alert('Data gagal dihapus!'); </script>";
    echo mysqli_error($con);
    echo "<meta http-equiv='refresh' content='2;url=?hal=jabatan'>";
}
?>