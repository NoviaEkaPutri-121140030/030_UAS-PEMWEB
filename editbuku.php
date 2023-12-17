<?php
include "koneksi.php"; // Pastikan file ini sudah berisi kode untuk koneksi ke database

// Periksa apakah parameter kode_buku ada dalam URL
if(isset($_GET['kode_buku'])) {
    // Tangkap nilai kode_buku dari URL
    $kode_buku = $_GET['kode_buku'];

    // Query untuk mendapatkan data buku berdasarkan kode_buku
    $query = "SELECT * FROM buku WHERE kode_buku = '$kode_buku'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Ambil data buku
        $row = mysqli_fetch_assoc($result);

        // Tampilkan formulir pra-diisi dengan data buku yang akan diedit
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Buku</title>
            <link rel="stylesheet" href="style/style.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
        </head>
        <body>
            <header class="header-logo">
                <h1>Arsip Akademik</h1>
                <nav>
                    <ul class="nav-list">
                        <li><a href="form.php">Form Pendataan</a></li>
                        <li><a href="index.php">Daftar Buku</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <div id="content">
                    <article class="card">
                        <h1>Edit Buku</h1>
                        <div class="form">
                            <form id="editBookForm" action="edit.php" method="post" onsubmit="return validateForm()">
                                <label for="kode_buku">Kode Buku:</label>
                                <input type="number" id="kode_buku" name="kode_buku" value="<?php echo $row['kode_buku']; ?>" readonly><br>

                                <label for="judul_buku">Judul Buku:</label>
                                <input type="text" id="judul_buku" name="judul_buku" value="<?php echo $row['judul_buku']; ?>"><br>

                                <label for="penulis">Penulis:</label>
                                <input type="text" id="penulis" name="penulis" value="<?php echo $row['penulis']; ?>"><br>

                                <label for="penerbit">Penerbit:</label>
                                <input type="text" id="penerbit" name="penerbit" value="<?php echo $row['penerbit']; ?>"><br>

                                <label for="tahun_terbit">Tahun Terbit:</label>
                                <input type="date" id="tahun_terbit" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br>

                                <label for="jumlah_halaman">Jumlah Halaman:</label>
                                <input type="number" id="jumlah_halaman" name="jumlah_halaman" value="<?php echo $row['jumlah_halaman']; ?>"><br>

                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </article>
                </div>
            </main>

            <footer>
                <p>&#169; 2023, Institut Teknologi Sumatera</p>
            </footer>

            <script src="js/form.js"></script>
        </body>
        </html>
        <?php
    } else {
        // Jika query tidak berhasil, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Kode buku tidak valid.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
