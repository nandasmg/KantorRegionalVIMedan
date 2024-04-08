<?php
$koneksi = mysqli_connect("localhost","root","","absensibkn");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenkel = $_POST['jenkel'];
$tanggal = $_POST['tanggal'];
$select = $_POST['option'];

$query = "UPDATE registrasi_pegawai SET Nama='$nama', Alamat='$alamat', Jenkel='$jenkel', Tanggal='$tanggal', Divisi='$select' WHERE NIP='$nip'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman TampilData.php
        header("location:../absensibkn/TampilData.php");
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Gagal melakukan pembaruan data.";
    }
}

?>