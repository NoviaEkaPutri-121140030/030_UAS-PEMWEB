<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Mahasiswa Baru</title>
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
            <article id="about" class="card">
                <h1>Inputkan Detail Buku</h1>
                <div class="form">
                    <form id="bookForm" action="tambahbuku.php" method="post" onsubmit="return validateForm()">
                        <label for="kode_buku">Kode Buku:</label>
                        <input type="number" id="kode_buku" name="kode_buku"><br>

                        <label for="judul_buku">Judul Buku:</label>
                        <input type="text" id="judul_buku" name="judul_buku"><br>

                        <label for="penulis">Penulis:</label>
                        <input type="text" id="penulis" name="penulis"><br>

                        <label for="penerbit">Penerbit:</label>
                        <input type="text" id="penerbit" name="penerbit"><br>

                        <label for="tahun_terbit">Tahun Terbit:</label>
                        <input type="date" id="tahun_terbit" name="tahun_terbit"><br>

                        <label for="jumlah_halaman">Jumlah Halaman:</label>
                        <input type="number" id="jumlah_halaman" name="jumlah_halaman"><br>

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
