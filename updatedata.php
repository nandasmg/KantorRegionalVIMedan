<form action="update.php" method="post">
<link rel="stylesheet" href="styletampil1.css"/>
<h1>Update Data Pegawai</h1>
<table width="90%" border="2px" align="center">
<tr>
    <td class="td" width="3%">No</td>
    <td class="td" width="15%">NIP</td>
    <td class="td">Nama</td>
    <td class="td">Alamat</td>  
    <td class="td" width="13%">Jenis Kelamin</td>
    <td class="td" width="13%">Tanggal</td>
    <td class="td" width="10%">Divisi</td>   
    <td class="td" colspan="3">Aksi</td>
</tr>
    <?php
    $koneksi = mysqli_connect("localhost","root","","absensibkn");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //menangkap data yang dikirim dari form
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenkel = $_POST['jenkel'];
        $select = $_POST['option'];
    
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * from registrasi_pegawai");
    while($cek=mysqli_fetch_array($data)) {
        ?>
    <tr>
    <td><?php echo $no++;?></td>
    <td><input type="hidden" id="nip" value="<?php echo $cek['NIP'];?>"></td>
    <td><input type="hidden" id="nip" value="<?php echo $cek['Nama'];?>"></td>
    <td><input type="hidden" id="nip" value="<?php echo $cek['Alamat'];?>"></td>
    <td><input type="hidden" id="nip" value="<?php echo $cek['Jenkel'];?>"></td>
    <td><input type="hidden" id="nip" value="<?php echo $cek['Divisi'];?>"></td>
    <td><a href="TampilData.php" >Lanjut</a></td>
    </tr>
    <?php
    }
    ?>
    <?php
    }
    ?>
</table>
</form>