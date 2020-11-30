<?php
include("config.php");

if (!isset($_GET['No_Presensi'])) {
    header("Location: list-siswa.php");
}

$No_Presensi = $_GET['No_Presensi'];

$sql = "SELECT * FROM tb_siswa WHERE No_Presensi = $No_Presensi";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_object($query);
$nomorDepan = substr($siswa->No_hp, 0, 4);
$nomorTengah = substr($siswa->No_hp, 5, 4);
$nomorAkhir = substr($siswa->No_hp, 10, 4);
$nomorHp = $nomorDepan . '' . $nomorTengah . '' . $nomorAkhir;

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan");
}

?>

<?php require "theme/head.php" ?>
<?php session_start() ?>
<?php require "theme/navbar.php" ?>

<?php if (!isset($_SESSION['username'])) : ?>
    <div class="container">
        <header>
            <h3 class="mt-5">Mohon untuk <a href="login/index.php" class="btn btn-primary">Login</a> terlebih dahulu</h3>
        </header>
    </div>
<?php else : ?>
    <div class="container">

        <header>
            <h3>Form Edit Data Siswa</h3>
        </header>
        <form action="proses-edit.php" method="post">
            <fieldset>
                <input type="hidden" name="No_Presensi" value="<?= $siswa->No_Presensi ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $siswa->Nama ?>">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input class="form-control" type="text" name="kelas" placeholder="11A" value="<?= $siswa->Kelas ?>">
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenisKelamin">
                        <option value="0" <?= ($siswa->Jenis_Kelamin == 0) ? 'selected' : '' ?>>Laki - Laki</option>
                        <option value="1" <?= ($siswa->Jenis_Kelamin == 1) ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Jln Nganu, NGanu, Nganu" value="<?= $siswa->Alamat ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">No Hp</label>
                    <input class="form-control" type="text" name="nohp" placeholder="084565987845" value="<?= $nomorHp ?>">
                </div>
                <div class="form-group">
                    <a href="list-siswa.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
                </div>
            </fieldset>
        </form>
    </div>
<?php endif; ?>

<?php require "theme/footer.php" ?>