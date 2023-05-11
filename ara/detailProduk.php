<?php
include_once 'koneksi.php';
include_once 'header.php';
include_once 'hero.php';
require_once 'models/Produk.php';
$id = $_REQUEST['id'];
// Buat Object
$obj = new Produk();
$produk = $obj->getProduk($id);

?>
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Detail Produk</h2>
        </div>

        <div class="produ$produk">

            <div class="col-lg-12">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td><?= $produk['nama'] ?></td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td><?= $produk['harga_jual'] ?></td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td><?= $produk['stok'] ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td><?= $produk['deskripsi'] ?></td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td><?= $produk['kategori'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="home.php" class="btn btn-danger mb-2">Kembali</a>
                        <a href="form_pemesanan.php" class="btn btn-primary mb-2">Beli Produk</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->

<?php

include_once 'footer.php';

?>