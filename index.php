<?php require "theme/head.php" ?>
<?php session_start() ?>
<?php require "theme/navbar.php" ?>
<?php include "config.php" ?>

<div class="container">
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php if ($_GET['status'] == "suskses") : ?>
                <div class="alert alert-primary" role="alert">
                    Pendaftaran Berhasil
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Pendaftaran Gagal!
                </div>
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <?php if (isset($_GET['login'])) : ?>
        <p>
            <?php if ($_GET['login'] == "sukses") : ?>
                <div class="alert alert-primary" role="alert">
                    Login Berhasil
                </div>
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <header class="bg-light p-3">
        <h4>Selamat Datang di</h4>
        <h1 class="font-weight-bold">Sekolah Menengah Koding</h1>
    </header>

    <h4 class="mt-5">Daftar Siswa</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $sql = "SELECT * FROM tb_siswa LIMIT 5";
            $query = mysqli_query($db, $sql); ?>
            <?php while ($siswa = mysqli_fetch_object($query)) : ?>
                <tr>
                    <td><?= $siswa->No_Presensi ?></td>
                    <td><?= $siswa->Nama ?></td>
                    <td><?= $siswa->Jenis_Kelamin == 0 ? 'Laki - Laki' : 'Perempuan' ?></td>
                    <td><?= $siswa->Alamat ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php require "theme/footer.php" ?>