<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi Pegawai BKN</title>

    <!--link css-->
    <link rel="stylesheet" href="styleinput.css" />

    <!--link php-->
    <Form method="post" action="programsimpandata.php">
  </head>
  <body>
    <!--container form-->
    <div class="container">
      <!--content wrapper-->
      <div class="wrapper">
        <h2 class="title">Absensi Pegawai BKN</h2>
        <div>
          <!--time-->
          <div class="clock">
            <p class="clock1" id="clock">00:00:00</p>
          </div>
          <!--time-->
        </div>
        <!--container form-->

        <!--class link-->
        <div class="link">
          <div class="link1">
            <!--link Profile-->
            <a href="#">Beranda</a>
          </div>
          <div class="link1">
            <!--link absensi-->
            <a href="inputAbsensi.php">Registrasi</a>
          </div>
          <div class="link1">
            <!--link data pegawai-->
            <a href="TampilData.php">Data Pegawai</a>
          </div>
        </div>
      </div>
      <!--container form-->

      <!--Form Input-->

      <!--wrapper2-->
      <div class="wrapper2">

        <!--Input Data-->
        <div class="wrapper3">
          <h2 class="profil">Profil</h2>
          <!--class nik-->
          <table class="table" >
            <th class="nip">NIP</th>
            <tr>
            <td><input type="text" id="nip" name="nip" title="Masukkan NIP" required /></td>
          </tr>

          <!--class nama-->
            <th class="nama">Nama</th>
            <tr>
           <td><input type="text" id="nama" name="nama" title="Masukkan Nama" required/></td>
          </tr>
          <!--end class nama-->

          <!--class Alamat-->
            <th class="alamat">Alamat</th>
            <tr>
              <td><input type="text" id="alamat" name="alamat" title="Masukkan Alamat" required/></td>
              </tr>
          <!--end class No.Telp-->

          <!--clasa jenkel-->
            <th class="jeniskelamin">Jenis Kelamin</th>
            <tr class="jenskela">
              <td class="laki"><input type="radio" name="jenkel" value="Pria" id="jenkel" class="radio" required><label class="laki">Pria</label></td>
              <td class="perem"><input type="radio" name="jenkel" value="Wanita" id="jenkel" class="radio" required><label class="wanita">Wanita</label></td>
            </tr> 
          <!--end Jenkel-->

          <!--class Tanggal-->
            <th class="th-tanggal">Tanggal</th>
          <tr>
         <td><input type="date" id="tanggal" name="tanggal" title="Masukkan Tanggal" required/></td>
         </tr>
        <!--end class Tanggal-->

          <!--Select option-->
          <th></th>
          <tr>
            <td>
              <select id="option" name="option" class="select" required>
                <option value="">-Pilih Devisi-</option>
                <option value="PDSK">PDSK</option>
                <option value="KEUANGAN">KEUANGAN</option>
                <option value="MUTASI">MUTASI</option>
                <option value="PENSIUN">PENSIUN</option>
                <option value="UMUM">UMUM</option>
              </select>
            </td>
          </tr>
          <tr class="button">
           <td><input type="submit" class="simpan" value="Simpan"/></td>
            <td class="batal1"><input type="reset" class="batal" value="Batal"/></td>
          </tr>
          <!--end select-->
        </div>
      </table>
      </div>
      <!--end Input Data-->
    </div>
    <!--end wrapper2-->

    <script src="main.js"></script>
  </body>
</form>
</html>
