<?php require "theme/head.php" ?>
<?php session_start() ?>
<?php require "theme/navbar.php" ?>
<?php include "config.php" ?>
<?php if (!isset($_SESSION['username'])) : ?>
    <div class="container">
        <header>
            <h3 class="mt-5">Mohon untuk <a href="login/index.php" class="btn btn-primary">Login</a> terlebih dahulu</h3>
        </header>
    </div>
<?php else : ?>
    <div class="container">

        <header>
            <h3>Siswa yang mendaftar</h3>
        </header>
        <div>
            <a class="btn btn-success" href="index.php">Kembali</a>
            <a class="btn btn-primary float-right" href="form-daftar.php">Tambah Baru</a>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT No_Presensi, Nama, Kelas, Jenis_Kelamin, Alamat, No_hp, username FROM tb_siswa LEFT JOIN login ON id_siswa = No_Presensi ORDER BY No_Presensi";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_object($query)) :
                ?>
                    <tr>
                        <td><?= $siswa->No_Presensi ?></td>
                        <td><?= $siswa->Nama ?></td>
                        <td><?= $siswa->username ?></td>
                        <td><?= $siswa->Kelas ?></td>
                        <td><?= ($siswa->Jenis_Kelamin == 0) ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td><?= $siswa->Alamat ?></td>
                        <td><?= $siswa->No_hp ?></td>
                        <td>
                            <a class="btn btn-success" href="form-edit.php?No_Presensi=<?= $siswa->No_Presensi ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?No_Presensi=<?= $siswa->No_Presensi ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <p class="btn btn-primary">Total Siswa : <b><?= mysqli_num_rows($query) ?></b></p>
            </tbody>
        </table>

    </div>
<?php endif; ?>

<?php require "theme/footer.php" ?>