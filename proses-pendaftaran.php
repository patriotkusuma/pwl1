<?php
include('config.php');

if (isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $passEncrypt = password_hash($password, PASSWORD_BCRYPT);

    // Ambil data presensi sebelumnya
    $no_presensi = mysqli_query($db, "SELECT No_Presensi FROM `tb_siswa` ORDER BY No_Presensi DESC LIMIT 1")->fetch_object()->No_Presensi;
    $nomorHpDepan = substr($_POST['nohp'], 0, 4);
    $nomorHpTengah = substr($_POST['nohp'], 4, 4);
    $nomorHpAkhir = substr($_POST['nohp'], 8);
    $nomorHp = $nomorHpDepan . '-' . $nomorHpTengah . '-' . $nomorHpAkhir;

    // query tambah data
    $no_presensi++;
    $sql = "INSERT INTO `tb_siswa` (`No_Presensi`, `Nama`, `Kelas`, `Jenis_Kelamin`, `Alamat`, `No_hp`) VALUES ('$no_presensi', '$nama', '$kelas','$jenisKelamin' ,'$alamat', '$nomorHp')";
    $sqlLogin = "INSERT INTO `login` VALUES (NULL, '$no_presensi', '$username', '$passEncrypt')";
    $query = mysqli_query($db, $sql);
    $queryLogin = mysqli_query($db, $sqlLogin);

    // apakah berhasil disimpan
    if ($query && $queryLogin) {
        header('Location: index.php?status=suskses');
    } else {


        header("Location: index.php?status=gagal");
    }
} else {
    die("Akses dilarang ..");
}
