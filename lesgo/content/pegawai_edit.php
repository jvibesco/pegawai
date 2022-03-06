<?php
    if(!defined('INDEX')) die("");
    $id = $_GET["id"];
    $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$id'");
    $data = mysqli_fetch_assoc($query);
?>

<h4 class="mt-2">Ubah Pegawai</h4>
<hr>
<form class="mb-5" action="?hal=pegawai_update" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data["id_pegawai"] ?>">
    <input type="hidden" name="fotoLama" value="<?= $data['foto'] ?> ">

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
       <div class="custom-file">
         <label for="foto" class="custom-file-label"></label>   
         <input class="custom-file-input" type="file" id="foto" name="foto">
         <img class="m-1" src="images/<?= $data['foto'] ?>" width="100">
      </div>
     </div>
   </div>

   <div class="form-group row mt-2">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_pegawai']?>">
     </div> 
   </div>

   <div class="form-group row mt-2">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-sm-4">   
        <div class="custom-control custom-radio custom-control-inline">
            <?php
                if($data['jenis_kelamin'] == 'L') {
                    $l = "checked";
                    $p = "";
                } else {
                    $l = "";
                    $p = "checked";
                }
            ?>

          <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L" <?= $l ?>> 
          <label class="custom-control-label" for="jkl">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P" <?= $p ?>> 
          <label class="custom-control-label" for="jkp">Perempuan</label>
        </div> 
     </div>
   </div>

   <div class="form-group row mt-2">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>   
      <div class="col-sm-4">   
        <input class="form-control" type="date" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
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
                echo "<option value='$j[id_jabatan]'";
                if($j['id_jabatan'] == $data['id_jabatan']) echo "selected";
                echo "> $j[nama_jabatan]</option>";
            }
            ?>
        </select>
      </div>
   </div>
    
    <div class="form-group row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea class="form-control" id="keterangan" name="keterangan"><?= $data['keterangan'] ?></textarea>
     </div>
   </div>

   <button type="submit" class="btn btn-info mt-3"><i class="material-icons md-dark float-start">save</i>&nbsp;Simpan</button>
   <button type="reset" class="btn btn-warning mt-3"><i class="material-icons md-dark float-start">clear</i>&nbsp;Batal</button>
</form>