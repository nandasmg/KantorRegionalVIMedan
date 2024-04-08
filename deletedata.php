<?php
$koneksi = mysqli_connect("localhost","root","","absensibkn");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = "DELETE FROM registrasi_pegawai WHERE NIP='$nip'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, tampilkan pesan sukses
        echo "Data dengan NIP $nip berhasil dihapus.";
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Gagal menghapus data.";
    }

    // Mengarahkan kembali ke halaman Tampildata.php setelah penghapusan data selesai
    header("location:../AbsensiBKN/Tampildata.php");
}
?>