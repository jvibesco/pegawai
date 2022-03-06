<?php 
    if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Tambah Jabatan</h4>
<form class="mb-5" action="?hal=jabatan_insert" method="POST">
    <div class="form-group row mt-2">
        <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>   
        <div class="col-sm-4">   
        <input class="form-control" type="text" id="nama" name="nama">
        </div> 
    </div>

    <button type="submit" class="btn btn-info mt-3"><i class="material-icons md-dark float-start">save</i>&nbsp;Simpan</button>
    <button type="reset" class="btn btn-warning mt-3"><i class="material-icons md-dark float-start">clear</i>&nbsp;Batal</button>
</form>