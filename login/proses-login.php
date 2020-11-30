<?php include "../config.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$time = time();
$check = isset($_POST['remember-me']) ? $_POST['remember-me'] : '';

$sql = "SELECT * FROM `login` WHERE username = '$username'";
$query = mysqli_query($db, $sql);
$login = mysqli_fetch_object($query);

if ($login != NULL) {
    if ($username == $login->username && password_verify($password, $login->password)) {
        $_SESSION['logged'] = 1;
        $_SESSION['username'] = $username;


        if ($check) {
            setcookie("cookielogin[user]", $username, $time + 604800);
            setcookie("cookielogin[pass]", $password, $time + 604800);
        }

        header("Location: ../index.php?login=sukses");
    }
} else {
    header('Location: index.php?login=gagal');
}
