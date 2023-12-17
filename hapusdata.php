<?php
include "koneksi.php"; // Pastikan file ini sudah berisi kode untuk koneksi ke database

// Periksa apakah parameter kode_buku ada dalam URL
if(isset($_GET['kode_buku'])) {
    // Tangkap nilai kode_buku dari URL
    $kode_buku = $_GET['kode_buku'];

    // Query untuk menghapus data berdasarkan kode_buku
    $query = "DELETE FROM buku WHERE kode_buku = '$kode_buku'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Kode buku tidak valid.";
}

header("Location: index.php");
// Tutup koneksi
mysqli_close($koneksi);
?>
