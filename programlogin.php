<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "absensibkn");

// kalok data username dan password nya benar
$username_benar = "username";
$password_benar = "password";

$username = $_POST['user'];
$password = $_POST['pass'];

$query = "SELECT * FROM tb_login WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 1) {
    // Jika data ditemukan, set session dan arahkan ke halaman selanjutnya
    $_SESSION['username'] = $username;
    header("location:../absensibkn/InputAbsensi.php");
} else {
    // Jika data tidak ditemukan, tampilkan pesan kesalahan
    $error = "Username atau password salah!";
    echo "Username atau password salah!";
}
?>
