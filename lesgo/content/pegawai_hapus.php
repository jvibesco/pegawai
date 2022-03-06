<?php
    if(!defined('INDEX')) die("");

    if(file_exists("images/$_GET[foto]")) unlink("images/$_GET[foto]");
    $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai = '$_GET[id]'");

    if($query) {
        echo "<script>
            alert('Data berhasil dihapus!');
        </script>
        <meta http-equiv='refresh' content='0;url=?hal=pegawai'>;";
    } else {
        echo "
    <script>
            alert('data gagal ditambahkan!');
    </script>
    <meta http-equiv='refresh' content='3;url=?hal=pegawai_edit'>;
    ";

    echo mysqli_error($con);
    }
?>