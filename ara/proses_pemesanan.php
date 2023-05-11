<?php
require_once 'koneksi.php';
?>
<?php
$_nama = $_POST['nama_pemesan'];
$_alamat = $_POST['alamat_pemesan'];
$_tanggal = $_POST['tanggal'];
$_produk = $_POST['produk'];
$_hp = $_POST['no_hp'];
$_email = $_POST['email'];
$_jumlah = $_POST['jumlah_pesanan'];
$_deskripsi = $_POST['deskripsi'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_alamat; // 3
$ar_data[] = $_hp;
$ar_data[] = $_email;
$ar_data[] = $_jumlah;
$ar_data[] = $_deskripsi;
$ar_data[] = $_produk; // ? 7

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,
    jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
}

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:hasil.php');
?>