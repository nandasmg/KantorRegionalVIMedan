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

// Menampilkan data yang ditangkap
echo "NIP: " . $nip . "<br>";
echo "Nama: " . $nama . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Jenkel: " . $jenkel . "<br>";
echo "Tanggal: " . $tanggal . "<br>";
echo "Divisi: " . $select . "<br>";
}


$query = "INSERT INTO registrasi_pegawai (NIP, Nama, Alamat, Jenkel, Tanggal, Divisi) VALUES ('$nip', '$nama', '$alamat', '$jenkel', '$tanggal', '$select')";
$result = mysqli_query($koneksi, $query);

if($result) {
    echo "Data berhasil dimasukkan ke database.";
} else {
    echo "Gagal memasukkan data ke database.";
}

header("location:../absensibkn/TampilData.php")

?>