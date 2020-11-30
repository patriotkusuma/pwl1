<?php
include('config.php');

if (isset($_GET['No_Presensi'])) {
    $No_Presensi = $_GET['No_Presensi'];

    $sql = "DELETE FROM tb_siswa WHERE No_Presensi = $No_Presensi";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus..");
    }
} else {
    die("akses dilarang..");
}
