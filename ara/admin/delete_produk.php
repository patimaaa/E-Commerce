<?php
// import database
require_once '../koneksi.php';
// tangkep data id delete nya
$delete = $_GET['iddel'];
// bikin query
$sql = "DELETE FROM produk WHERE id=?";
// siapin query
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);

header('location:produk.php');
