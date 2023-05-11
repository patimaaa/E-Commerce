<?php

class Kategori{
    // Member 1
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;

    }

    // Member 3 Method CRUD

    // Menampilkan Data Kategori
    public function dataKategori(){
        $sql = "SELECT * FROM kategori";

        // Prepare Statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

}

?>