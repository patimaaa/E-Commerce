<?php
include_once '../koneksi.php';
require_once 'header.php';
require_once 'sidebar.php';

$sql = "SELECT * FROM pesanan";
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
                                        <h2>Data Pesanan</h2>
                                    </div>

                                    <div class="row content">
                                        <div class="col-lg-12">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Alamat</th>
                                                        <th scope="col">No HP</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Produk</th>
                                                        <th scope="col">Jumlah</th>
                                                        <th scope="col">Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($rs as $prod) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no; ?></td>
                                                            <td><?= $prod['nama_pemesan']; ?></td>
                                                            <td><?= $prod['tanggal']; ?></td>
                                                            <td><?= $prod['alamat_pemesan']; ?></td>
                                                            <td><?= $prod['no_hp']; ?></td>
                                                            <td><?= $prod['email']; ?></td>
                                                            <td><?= $prod['produk_id']; ?></td>
                                                            <td><?= $prod['jumlah_pesanan']; ?></td>
                                                            <td><?= $prod['deskripsi']; ?></td>
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