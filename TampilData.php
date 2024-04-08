<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="styletampil1.css"/>
<a href="inputAbsensi.php" class="linkAbsen"><input type="submit" class="backlink" value="Kembali"></a>
<h1>Data Pegawai</h1>
<div class="search"><input type="text" id="search" autocomplete="off"><i class='bx bx-search-alt-2'></i></div>
<table border="1px" >
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
    
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM registrasi_pegawai");
    while($cek=mysqli_fetch_array($data)){
        ?>
    <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $cek['NIP'];?></td>
    <td><?php echo $cek['Nama'];?></td>
    <td><?php echo $cek['Alamat'];?></td>
    <td><?php echo $cek['Jenkel'];?></td>
    <td><?php echo $cek['Tanggal'];?></td>
    <td><?php echo $cek['Divisi'];?></td>
    <td colspan="2"><div class="div"><a href="updatedata.php" class="link2"><i class='bx bx-pencil' class="icon1"></i></a></td>
    <td><a href="deletedata.php" class="link3"><i class='bx bx-trash' class="icon2"></i></a></div></td>
    </tr>
    <?php
    }
    ?>
</table>
<script src="searchtampil.js"></script>
