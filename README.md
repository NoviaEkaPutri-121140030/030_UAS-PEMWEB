# Arsip Akademik - UAS Pemrograman Web

## Author
- **Nama :** Novia Eka Putri
- **NIM :** 121140030
- **Github :** noviaekaputri

## Description
Project Arsip Akademik ini menggunakan implementasi dari kombinasi penggunaan pemrograman sisi client dan server menggunakan JavaScript dan PHP.

## Link Web
[Arsip Akademik](https://121140030uaspemweb.000webhostapp.com/)

## Bagian 1 : Client-side Programming (Bobot 30%)
### 1.1 Membuat Halaman Web Sederhana
Halaman web dibuat dalam file `index.php` dengan memanfaatkan JavaScript untuk memanipulasi DOM dibagian `index.php`. Di Form Pendataan akan menampilkan form inputan dengan 6 elemen pada file `form.php` dan `editbuku.php`. Dengan menggunakan tag table pada file `index.php` akan menampilkan data yang diambil dari server.
### 1.2 Melakukan Event Handling(Penanganan peristiwa)
Menggunakan 3 event untuk penanganan form pada file `form.js` dan mengimplementasikan JavaScript untuk membuat validasi input sebelum PHP memproses file tersebut.

## Bagian 2 : Server-side Programming (Bobot 30%)
### 2.1 Melakukan Pengolahan Data dengan Script PHP
Menampilkan hasil pengolahan data ke halaman `index.php` dan menggunakan $_POST pada semua file yang digunakan(`index.php`, `form.php`, `login.php`, `register.php`, dan `editbuku.php`)
### 2.2 Objek PHP Berbasis OOP
Membuat objek PHP berbasis OOP dalam file `buku.php` yang terdapat beberapa method yang akan dipanggil oleh file `index.php`

## Bagian 3 : Management Database (Bobot 20%)
### 3.1 Membuat Tabel Database di MySQL
Databse ini berfungsi untuk menyimpan daftar buku seperti kode buku, judul buku, penulis, penerbit, tahun terbit dan jumlah halaman yang syntaxnya terdapat pada file `asrip.sql`.
### 3.2 Melakukan Konfigurasi Koneksi ke Database MySQL
Melakukan konfigurasi koneksi ke database pada file `koneksi.php`.
### 3.3 Memanipulasi Data pada Tabel Databse
Dengan menggunakan query SQLpada file `tambahbuku.php`,`editbuku.php`, `register.php` dan `hapusdata.php`dimana hal tersebut mengimplementasikan penambahan, pembaruan dan penghapusan entitas pada tabel.

### Bagian 4 : Management State (Bobot 20%)
### 4.1 Menggunakan Session untuk Script PHP 
Menggunakan session PHP untuk menyimpan dan mengelola state pengguna pada `index.php`.
### 4.2 Mengelola State menggunakan Cookie dan Browser Storage
Mengimplementasikan penggunaan cookie dan browser storage dengan JavaScript pada file `form.js`pada `index.php` dan `editbuku.php`untuk mengelola state. Contohnya yaitu penggunaan cookie pada `index.php` dan `editbuku.php`untuk menyimpan data formulir di `form.js`.

## Hosting Aplikasi Web (Bonus dengan bobot 20%)
## Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
Langkah-langkah melakukan hosting yaitu:
- Pendaftaran akun, melakukan pendaftaran dan pembuatan akun pada 000webhost
- Upload file, mengupload seluruh file pendukung aplikasi web pada directory yang sesuai pada 000webhost melalui FTP atau file manager.
- Database, Membuat database pada pae=nel 000webhost dan menghubungkannya ke aplikasi web.
- Konfigurasi koneksi database, melakukan konfigurasi database sesuai dengan informasi database di 000webhost pada file PHP `koneksi.php`.
- Testing, untuk memastikan aplikasi berjalan baik sesuai dengan keinginan.
## Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda
Untuk melakukan hosting pada aplikasi digunakan 000webhost dari Hostinger karena sesuai dengan kebutuhan dalam hosting aplikasi yang saya buat. Ia menyediakan layanan hosting gratis domain, cPanel, PHP, MySQL, & FTP dan menyediakan disk space 1000 MB dan unlimited bandwidth yang cocok untuk aplikasi dengan skala kecil-menengah.
## Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
Dilakukan beberapa langkah untuk memastikan keamanan pada aplikasi web yaitu:
- Mengimplementasikan validasi input pada sisi klien dan sisi server untuk mencegah serangan injeksi
- Melakukan update reguler pada aplikasi yang digunakan
- Melakukan enkripsi menggunakan protokol HTTPS guna mengamankan komunikasi antara client dan server.
## Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
- Konfigurasi server untuk mendukung aplikasi web yang saya gunakan menggunakan PHP version yang sesuai
- Menerapkan izin file(file permission) untuk emamastikan keamanan
- Penanganan kesalahan yang memudahkan proses penanganan masalah
