<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip_pegawai = $_POST['nip_pegawai'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $alamat_pegawai = $_POST['alamat_pegawai'];
  $no_hp = $_POST['no_hp'];
$q = $conn->query("UPDATE data_pegawai SET nama_pegawai = '$nama_pegawai', alamat_pegawai = '$alamat_pegawai', no_hp = '$no_hp' WHERE nip_pegawai = '$nip_pegawai'");
if ($q) {
    // output jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}