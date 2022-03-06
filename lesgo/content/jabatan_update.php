<?php
if(!defined('INDEX')) die("");
$nama = htmlspecialchars($_POST['nama']);
$query = mysqli_query($con, "UPDATE jabatan SET nama_jabatan = '$nama' WHERE id_jabatan = '$_POST[id]'");

if ($query) {
    echo "Data berhasil diubah!";
    echo "<meta http-equiv='refresh' content='0;url=?hal=jabatan'>";
} else {
    echo "Data gagal diubah!";
    echo mysqli_error($con);
}
?>