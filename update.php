<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM data_pegawai WHERE nip_pegawai = '$id'");
foreach ($q as $dt) :
  ?>
<h1>Data Pegawai - Program</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_updt.php" method="post">
    <input type="hidden" name="nip_pegawai" value="<?= $dt['nip_pegawai'] ?>">
    <input type="text" name="nama_pegawai" value="<?= $dt['nama_pegawai'] ?>">
    <input type="text" name="alamat_pegawai" value="<?= $dt['alamat_pegawai'] ?>">
    <input type="number" name="no_hp" value="<?= $dt['no_hp'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}