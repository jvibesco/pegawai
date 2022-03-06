<?php
if(!defined('INDEX')) die("");

// cek apakah data berhasil ditambahkan atau tidak
if(tambah($_POST) > 0) {
    echo "
    <script>
            alert('data berhasil ditambahkan!');
    </script>
    <meta http-equiv='refresh' content='0;url=?hal=pegawai'>;
    ";
} else {
    echo "
    <script>
            alert('data gagal ditambahkan!');
    </script>
    <meta http-equiv='refresh' content='0;url=?hal=pegawai_tambah'>;
    ";
}
?>