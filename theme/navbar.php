<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/crud/index.php" ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/crud/form-daftar.php" ? 'active' : '' ?>">
                    <a class="nav-link" href="form-daftar.php">Daftar</a>
                </li>
                <?php if (isset($_SESSION['logged'])) : ?>
                    <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/crud/list-siswa.php" ? 'active' : '' ?>">
                        <a class="nav-link" href="list-siswa.php">Pendaftar</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="form-inline my-2 my-lg-0">
            <?php if (!isset($_SESSION['username'])) : ?>
                <a href="login/index.php" class="btn btn-primary"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
            <?php else : ?>
                <a class="btn btn-success text-light mr-2"><?= $_SESSION['username'] ?></a>
                <a href="login/logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt mr-2"></i></i>Logout</a>
            <?php endif; ?>
        </div>
    </div>
</nav>