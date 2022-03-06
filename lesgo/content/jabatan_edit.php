<?php
if(!defined('INDEX')) die("");
$query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan = '$_GET[id]'");
$data = mysqli_fetch_assoc($query);
?>

<h4 class="mt-2">Edit Jabatan</h4>
<hr>
<form class="mb-5" action="?hal=jabatan_update" method="POST">
    <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

    <div class="form-group row mt-2">
        <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>   
        <div class="col-sm-4">   
        <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>">
        </div> 
    </div>

    <button type="submit" class="btn btn-info mt-3"><i class="material-icons md-dark float-start">save</i>&nbsp;Simpan</button>
    <button type="reset" class="btn btn-warning mt-3"><i class="material-icons md-dark float-start">clear</i>&nbsp;Batal</button>
</form>