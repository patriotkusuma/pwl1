<?php
$server = "localhost";
$username = "root";
$password = "";
$nameDb = "db_siswa";

$db = mysqli_connect($server, $username, $password, $nameDb);

if (!$db) {
    die('gagal terhubung ke database: ' . mysqli_connect_error());
}
