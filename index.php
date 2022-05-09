<?php
// koneksinya
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Program Data</title>
</head>
<body>
  <h1>Data Pegawai - Program</h1>
  
  <!-- Menambahkan data dan melakukan proses ditable tambah -->

  <form method="post" action="tambah.php">
    <input type="number" name="nip_pegawai" placeholder="Masukkan NIP">
    <input type="text" name="nama_pegawai" placeholder="Nama Lengkap">
    <input type="text" name="alamat_pegawai" placeholder="Masukkan Alamat">
    <input type="number" name="no_hp" placeholder="Masukkan Nomer HP">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
<!-- menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>NIP</th>
      <th>Nama Pegawai</th>
      <th>Alamat Pegawai</th>
      <th>No HP</th>
      <th colspan="2">Aktivitas</th>
    </tr>
<?php
    // Tampilkan semua data dari table databse
    $q = $conn->query("SELECT * FROM data_pegawai");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nip_pegawai'] ?></td>
      <td><?= $dt['nama_pegawai'] ?></td>
      <td><?= $dt['alamat_pegawai'] ?></td>
      <td><?= $dt['no_hp'] ?></td>
      <td><a href="update.php?id=<?= $dt['nip_pegawai'] ?>">Ubah</a></td>
      <td><a href="hapus.php?id=<?= $dt['nip_pegawai'] ?>" onclick="return confirm('apakah anda akan menghapus data ini?')">Hapus</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>
</body>
</html>