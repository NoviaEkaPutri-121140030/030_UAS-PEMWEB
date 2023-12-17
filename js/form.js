// form.js
function validateForm() {
    var kodeBuku = document.getElementById("kode_buku").value;
    var judulBuku = document.getElementById("judul_buku").value;
    var penulis = document.getElementById("penulis").value;
    var penerbit = document.getElementById("penerbit").value;
    var tahunTerbit = document.getElementById("tahun_terbit").value;
    var jumlahHalaman = document.getElementById("jumlah_halaman").value;

    if (!kodeBuku || !judulBuku || !penulis || !penerbit || !tahunTerbit || !jumlahHalaman) {
        alert("Semua field harus diisi!");
        return false;
    }

    // Validasi tambahan sesuai kebutuhan

    // Simpan data ke localStorage
    setLocalStorage("kode_buku", kodeBuku);
    setLocalStorage("judul_buku", judulBuku);
    // Simpan data lainnya sesuai kebutuhan

    return true;
}

// Fungsi untuk menetapkan data ke localStorage
function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

// Fungsi untuk mendapatkan nilai dari localStorage berdasarkan key
function getLocalStorage(key) {
    return localStorage.getItem(key);
}

// Fungsi untuk menghapus data dari localStorage berdasarkan key
function removeLocalStorage(key) {
    localStorage.removeItem(key);
}
