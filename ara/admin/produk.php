<?php
include_once '../koneksi.php';
require_once 'header.php';
require_once 'sidebar.php';

$sql = "SELECT produk.*, kategori.nama AS kategori FROM produk
INNER JOIN kategori ON kategori.id = produk.kategori_id";
$rs = $dbh->query($sql);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body">

                            <section id="data_produk" class="data_produk">
                                <div class="container" data-aos="fade-up">

                                    <div class="section-title">
                                        <h2>Data Produk</h2>
                                    </div>

                                    <div class="row content">
                                        <div class="col-lg-12">
                                            <a href="form_produk.php" class="btn btn-primary mb-2">Tambah Produk</a>


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Kode</th>
                                                        <th scope="col">Nama Produk</th>
                                                        <th scope="col">Harga Jual</th>
                                                        <th scope="col">Harga Beli</th>
                                                        <th scope="col">Stok</th>
                                                        <th scope="col">Minimal Stok</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($rs as $prod) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no; ?></td>
                                                            <td><?= $prod['kode']; ?></td>
                                                            <td><?= $prod['nama']; ?></td>
                                                            <td><?= $prod['harga_jual']; ?></td>
                                                            <td><?= $prod['harga_beli']; ?></td>
                                                            <td><?= $prod['stok']; ?></td>
                                                            <td><?= $prod['min_stok']; ?></td>
                                                            <td><?= $prod['deskripsi']; ?></td>
                                                            <td><?= $prod['kategori']; ?></td>
                                                            <td>
                                                                <a href="view_produk.php?id=<?= $prod['id'] ?>" class="btn btn-info">Detail</a>
                                                                <a href="form_produk.php?idedit=<?= $prod['id'] ?>" class="btn btn-warning">Edit</a>
                                                                <a class="btn btn-danger" href="delete_produk.php?iddel=<?= $prod['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $prod['nama'] ?>?')) {return false}">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $no++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </section><!-- End About Us Section -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
require_once 'footer.php';
?>