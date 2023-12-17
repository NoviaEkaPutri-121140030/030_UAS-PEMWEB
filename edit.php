<?php
include "koneksi.php"; // Pastikan file ini sudah berisi kode untuk koneksi ke database

// Periksa apakah data yang diperlukan dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    // Query untuk melakukan UPDATE data buku berdasarkan kode_buku
    $query = "UPDATE buku SET
                judul_buku = '$judul_buku',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun_terbit',
                jumlah_halaman = '$jumlah_halaman'
                WHERE kode_buku = '$kode_buku'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Metode request tidak valid.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
