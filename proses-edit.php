<?php
include("config.php");

if (isset($_POST['simpan'])) {
    $No_Presensi = $_POST['No_Presensi'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $nomorHpDepan = substr($_POST['nohp'], 0, 4);
    $nomorHpTengah = substr($_POST['nohp'], 4, 4);
    $nomorHpAkhir = substr($_POST['nohp'], 8);
    $nomorHp = $nomorHpDepan . '-' . $nomorHpTengah . '-' . $nomorHpAkhir;

    $sql = "UPDATE tb_siswa SET No_Presensi = '$No_Presensi', Nama = '$nama', Kelas = '$kelas', Jenis_Kelamin = '$jenisKelamin', Alamat = '$alamat', No_hp = '$nomorHp' WHERE No_Presensi = '$No_Presensi'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }
} else {
    die('Akses dilarang...');
}
