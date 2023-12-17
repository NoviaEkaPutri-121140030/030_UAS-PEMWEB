<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Akademik</title>
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
                <li><a href="">Daftar Buku</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <article class="card">
                <h1>Daftar Buku</h1>
                <div class="daftar">
                    <table border="1">
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        include "koneksi.php";
                        include "buku.php";

                        // Lakukan query untuk mendapatkan data buku
                        $query = "SELECT * FROM buku";
                        $result = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            // Buat objek Buku
                            $buku = new Buku($row['kode_buku'], $row['judul_buku'], $row['penulis'], $row['penerbit'], $row['tahun_terbit'], $row['jumlah_halaman']);

                            // Tampilkan data menggunakan metode getter
                            echo "<tr>
                                    <td>{$buku->getKodeBuku()}</td>
                                    <td>{$buku->getJudulBuku()}</td>
                                    <td>{$buku->getPenulis()}</td>
                                    <td>{$buku->getPenerbit()}</td>
                                    <td>{$buku->getTahunTerbit()}</td>
                                    <td>{$buku->getJumlahHalaman()}</td>
                                    <td>
                                        <a href='editbuku.php?kode_buku={$buku->getKodeBuku()}'>Edit</a>
                                        <a href='hapusdata.php?kode_buku={$buku->getKodeBuku()}'>Delete</a>
                                    </td>
                                </tr>";
                        }
                        // Tutup koneksi
                        mysqli_close($koneksi);
                        ?>

                    </table>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p>&#169; 2023, Institut Teknologi Sumatera</p>
    </footer>
</body>
</html>
