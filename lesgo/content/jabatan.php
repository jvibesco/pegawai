<?php
    if(!defined('INDEX')) die(""); 
?>
<h4 class="mt-3">Data Jabatan</h4>
<hr />
<a href="?hal=jabatan_tambah" class="btn btn-success"> <i class="material-icons md-dark float-start" style="font-weight: bold">add</i>&nbsp;Tambah</a>
<div class="table-responsive mt-3">
  <table class="table table-striped table-hover table-bordered" id="example">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Jabatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
            $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
            $no = 0;
            while($data = mysqli_fetch_assoc($query)) {
                $no++;
        ?>
      <tr>
        <td><?= $no?></td>
        <td><?= $data['nama_jabatan'] ?></td>
        <td>
          <a href="?hal=jabatan_edit&id=<?=$data['id_jabatan']?>" class="btn btn-sm btn-info"> <i class="material-icons md-dark float-start">edit</i>&nbsp;Edit</a>
          <a href="?hal=jabatan_hapus&id=<?=$data['id_jabatan']?>" class="btn btn-sm btn-danger"> <i class="material-icons md-dark float-start">delete</i>&nbsp;Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
