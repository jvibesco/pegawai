<?php
// koneksi ke database 
$con = mysqli_connect("localhost", "root", "", "lesgo"); 

function registrasi($data) {
    global $con;
    $nama = stripslashes($data["nama"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);
    $password2 = mysqli_real_escape_string($con, $data["password2"]);

    // cek username sudah ada atau belum?? 
    $result = mysqli_query($con, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script> alert('username sudah terdaftar!'); </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo "<script> alert('konfirmasi password tidak sesuai!'); </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($con, "INSERT INTO user VALUES ('', '$nama', '$username', '$password')");
    return mysqli_affected_rows($con);
}

// fungsi tambah dan upload
function tambah($data){
    global $con;
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $tanggal = $data["tanggal"];
    $id = htmlspecialchars($data["jabatan"]);
    $ket = htmlspecialchars($data["keterangan"]);
    // upload gambar
    $foto = upload();
    if(!$foto) {
        return false;
    }
    $query = "INSERT INTO pegawai VALUES
                ('', '$nama', '$jk', '$tanggal', '$foto', '$ket', '$id')";

        mysqli_query($con, $query);
        return mysqli_affected_rows($con);

}

// fungsi upload foto
function upload() {
    $namaFile = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu')        
        </script>";
        return false;
    }

    // apakah yang diupload adalah gambar??
    $fotoValid = ['jpg', 'png', 'jpeg'];
    $ekstensiFoto = explode('.', $namaFile);
    $ekstensiFoto = strtolower(end($ekstensiFoto));
    if(!in_array($ekstensiFoto, $fotoValid)) {
        echo "<script>
            alert('Yang anda upload bukan gambar!')        
        </script>";
    }

    // ukuran gambar terlalu besar??
    if($size > 1000000) {
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFoto;
    move_uploaded_file($tmpName, 'images/' . $namaFileBaru);
    return $namaFileBaru;
}

// fungsi edit
function ubah($data) {
    global $con;
    $nama = htmlspecialchars($data["nama"]);
    $jk = htmlspecialchars($data["jk"]);
    $tanggal = $data["tanggal"];
    $idJabatan = htmlspecialchars($data["jabatan"]);
    $ket = htmlspecialchars($data["keterangan"]);
    $fotoLama = htmlspecialchars($data['fotoLama']);
    $id = $data['id'];

    // cek apakah user pilih gambar atau  tidak??
    if ($_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = $id");
        $data = mysqli_fetch_assoc($query);
        if(file_exists("images/$data[foto]")) unlink("images/$data[foto]");
        $foto = upload();

    }

    $query = "UPDATE pegawai SET 
                nama_pegawai = '$nama', 
                jenis_kelamin = '$jk', 
                tgl_lahir = '$tanggal',
                foto = '$foto', 
                keterangan = '$ket', 
                id_jabatan = '$idJabatan' 
            WHERE id_pegawai = '$id'";
    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}
?>