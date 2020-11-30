<?php
$server = "us-cdbr-east-02.cleardb.com";
$username = "b5f22695c614b2";
$password = "e9b4323f";
$nameDb = "db_siswa";

$db = mysqli_connect($server, $username, $password, $nameDb);

if (!$db) {
    die('gagal terhubung ke database: ' . mysqli_connect_error());
}
