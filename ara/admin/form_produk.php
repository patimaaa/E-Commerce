<?php
include_once '../koneksi.php';
require_once 'header.php';
require_once 'sidebar.php';

if (!empty($_GET['idedit'])) {
    $edit = $_GET['idedit'];
    // Nampilin data pakai select
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    // jalanin
    $st->execute([$edit]);
    // nampilin baris di setiap data
    $row = $st->fetch();
} else {
    // jalanin fungsi create (buat data baru)
    $row = [];
};
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                            <div class="container">
                                <h1 class="text-center pb-3">Form Produk</h1>
                                <form method="POST" action="proses_produk.php">
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                                        <div class="col-8">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                        <div class="col-8">
                                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-4 col-form-label">Kategori Produk</label>
                                        <div class="col-8">
                                            <select id="kategori" name="kategori" class="custom-select">
                                                <?php
                                                $sqlkategori = "SELECT * FROM kategori";
                                                $rskategori = $dbh->query($sqlkategori);
                                                foreach ($rskategori as $rowkategori) {
                                                ?>
                                                    <option value="<?= $rowkategori['id'] ?>"><?= $rowkategori['nama'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <!-- // Validasi -->
                                            <?php
                                            $button = (empty($edit)) ? "Simpan" : "Update";

                                            ?>
                                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button; ?>" />
                                            <input type="hidden" name="idedit" value="<?= $edit; ?>" />
                                        </div>
                                    </div>
                                </form>
                            </div>


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