<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$cek= mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level']=="1") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "1";
        header("location:administrator/index.php");
    } else if ($data['level']=="2") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "2";
        header("location:petugas/index.php");
    }else {
        header("location:index.php?pesan=gagal");
    }
}else {
    header("location:index.php?pesan=gagal");
}

// if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true || ($_SESSION['level'] != "1" && $_SESSION['level'] != "2")) {
//     header("location:index.php");
//     exit();
// }

// header("Cache-Control: no-strore, no-cache, must-revalidate, max-age=0");
// header("Pragma: no-cache");
// header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>