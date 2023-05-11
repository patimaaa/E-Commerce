<?php

class Produk{
    // Member 1
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;

    }

    // Member 3 Method CRUD

    // Menampilkan Data Produk
    public function dataProduk(){
        $sql = "SELECT produk.*, kategori.nama AS kategori FROM produk
        INNER JOIN kategori ON kategori.id = produk.kategori_id";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    // Menampilkan Detail Produk
    public function getProduk($id){
        $sql = "SELECT produk.*, kategori.nama AS kategori FROM produk
        INNER JOIN kategori ON kategori.id = produk.kategori_id
        WHERE produk.id = ?";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    // Menampilkan Data Kategori
    public function dataKategori(){
        $sql = "SELECT * from kategori";

        // Prepare Statement
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    // Menyimpan Data Produk
    public function simpan($data){
        $sql = "INSERT INTO produk(judul_produk,pengarang,penerbit,kategori_id)
                VALUES (?,?,?,?)";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    // Menyimpan Data Produk
    public function ubah($data){
        $sql = "UPDATE produk SET judul_produk=?, pengarang=?, penerbit=?, kategori_id=?
        WHERE produk.id = ?";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    // Menyimpan Hapus Data
    public function hapus($id){
        $sql = "DELETE FROM produk
        WHERE produk.id = ?";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

}
