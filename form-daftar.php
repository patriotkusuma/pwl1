<?php require "theme/head.php" ?>
<?php session_start() ?>
<?php require "theme/navbar.php" ?>

<div class="container">
    <header>
        <h3>Formulir Pendaftaran Siswa</h3>
    </header>

    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="nama">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="nama">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password" min="8" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="11A">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenisKelamin" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="0">Laki - Laki</option>
                    <option value="1">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Jln Nganu, NGanu, Nganu">
            </div>

            <div class="form-group">
                <label for="alamat">No Hp</label>
                <input class="form-control" type="text" name="nohp" placeholder="084565987845">
            </div>
            <div class="form-group">
                <a class="btn btn-secondary" href="index.php">Kembali</a>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button class="btn btn-primary float-right" type="submit" name="daftar">Daftar</button>
            </div>
        </fieldset>
    </form>
</div>

<?php require "theme/footer.php" ?>