<?php
include_once 'koneksi.php';
include_once 'header.php';
include_once 'hero.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container pt-5">
    <h1 class="text-center pb-3">Form Pemesanan Produk</h1>
    <form method="POST" action="proses_pemesanan.php">
        <div class="form-group row">
            <label for="nama_pemesan" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="produk" class="col-4 col-form-label">Produk</label>
            <div class="col-8">
                <select id="produk" name="produk" class="custom-select">
                    <?php
                    $sqlproduk = "SELECT * FROM produk";
                    $rsproduk = $dbh->query($sqlproduk);
                    foreach ($rsproduk as $rowproduk) {
                    ?>
                        <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp" class="col-4 col-form-label">Nomor HP</label>
            <div class="col-8">
                <input id="no_hp" name="no_hp" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
                <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <input type="submit" name="proses" type="submit" class="btn btn-success" value="Simpan" />
            </div>
        </div>
    </form>
</div>

<?php
include_once 'footer.php';
?>