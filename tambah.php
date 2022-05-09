<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip_pegawai = $_POST['nip_pegawai'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $alamat_pegawai = $_POST['alamat_pegawai'];
  $no_hp = $_POST['no_hp'];
// query memasukkan data kedalam database
  $q = $conn->query("INSERT INTO data_pegawai VALUES ('$nip_pegawai', '$nama_pegawai', '$alamat_pegawai', '$no_hp')");
if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}