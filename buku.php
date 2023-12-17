<?php
class Buku {
    private $kode_buku;
    private $judul_buku;
    private $penulis;
    private $penerbit;
    private $tahun_terbit;
    private $jumlah_halaman;

    // Constructor untuk menginisialisasi objek Buku
    public function __construct($kode_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit, $jumlah_halaman) {
        $this->kode_buku = $kode_buku;
        $this->judul_buku = $judul_buku;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->tahun_terbit = $tahun_terbit;
        $this->jumlah_halaman = $jumlah_halaman;
    }

    // Metode getter untuk mendapatkan nilai atribut
    public function getKodeBuku() {
        return $this->kode_buku;
    }

    public function getJudulBuku() {
        return $this->judul_buku;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getTahunTerbit() {
        return $this->tahun_terbit;
    }

    public function getJumlahHalaman() {
        return $this->jumlah_halaman;
    }
}
?>
