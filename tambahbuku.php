<?php
include "koneksi.php"; // Pastikan file ini sudah berisi kode untuk koneksi ke database

// Tangkap data dari formulir
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_halaman = $_POST['jumlah_halaman'];

// Query untuk menambahkan data ke dalam tabel buku
$query = "INSERT INTO buku (kode_buku, judul_buku, penulis, penerbit, tahun_terbit, jumlah_halaman) VALUES ('$kode_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$jumlah_halaman')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

header("Location: index.php");
// Tutup koneksi
mysqli_close($koneksi);
?>
