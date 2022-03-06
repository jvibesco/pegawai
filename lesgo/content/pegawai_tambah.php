<?php
    if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Tambah Pegawai</h4>
<hr>
<form class="mb-5" action="?hal=pegawai_insert" method="POST" enctype="multipart/form-data">
<div class="form-group row">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
       <div class="custom-file">
         <label for="foto" class="custom-file-label"></label>   
         <input class="custom-file-input" type="file" id="foto" name="foto">
      </div>
     </div>
   </div>

   <div class="form-group row mt-2">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="nama" name="nama">
     </div> 
   </div>

   <div class="form-group row mt-2">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-sm-4">   
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L"> 
          <label class="custom-control-label" for="jkl">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P"> 
          <label class="custom-control-label" for="jkp">Perempuan</label>
        </div> 
     </div>
   </div>

   <div class="form-group row mt-2">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>   
      <div class="col-sm-4">   
        <input class="form-control" type="date" id="tanggal" name="tanggal">
     </div>
   </div>

   <div class="form-group row mt-2">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
        <select class="custom-select" id="jabatan" name="jabatan">
          <option value=""> -Pilih Jabatan-</option>
          <?php
            $queryjabatan= mysqli_query($con, "SELECT * FROM jabatan");
            while($j = mysqli_fetch_assoc($queryjabatan)) {
                echo "<option value='$j[id_jabatan]'> $j[nama_jabatan]</option>";
            }
            ?>
        </select>
      </div>
   </div>

   <div class="form-group row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
     </div>
   </div>
    
   <button type="submit" class="btn btn-info mt-3"><i class="material-icons md-dark float-start">save</i>&nbsp;Simpan</button>
   <button type="reset" class="btn btn-warning mt-3"><i class="material-icons md-dark float-start">clear</i>&nbsp;Batal</button>



    <!-- <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input class="custom-file-input" type="file" id="foto" name="foto" required>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" id="nama" name="nama" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="jkl" name="jk" value="L">
                <label for="jkl" class="custom-control-label">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="jkp" name="jk" value="P">
                <label for="jkp" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-2">
            <input class="form-control" id="tanggal" name="tanggal" type="date">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-4">
            <select name="jabatan" id="jabatan" class="custom-select">
                <option value="">-Pilih Jabatan-</option>
                
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
    </div>
    
    <div class="form-group mt-2">
    <button type="submit" class="btn- btn-info"><i class="material-icons md-dark float-start">save</i>&nbsp;Simpan</button>
    <button type="reset" class="btn btn-warning"><i class="material-icons md-dark float-start">cancel</i>&nbsp;Batal</button>
    </div> -->
</form>