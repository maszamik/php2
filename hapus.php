<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
// perintah hapus data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM data_pegawai WHERE nip_pegawai = '$id'");
// cek perintah
  if ($q) {
    // Jika berhasil hapus maka output dibawah ini akan muncul
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // Jika gagal hapus maka output dibawah ini akan muncul
    echo "<script>alert('Data gagal dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}