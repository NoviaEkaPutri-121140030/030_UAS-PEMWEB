<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "koneksi.php"; // Pastikan file ini sudah berisi koneksi ke database

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan kata sandi yang di-hash berdasarkan username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Jika data pengguna ditemukan
        if ($row) {
            // Verifikasi kata sandi
            if (password_verify($password, $row['password'])) {
                // Set session untuk menandai bahwa pengguna telah login
                $_SESSION['username'] = $username;
                header("Location: index.php"); // Redirect ke halaman arsip setelah login
                exit();
            } else {
                echo "<script>
                    alert('Invalid username or password.');
                    window.location.href='login.html';
                  </script>";
            }
        } else {
            echo "<script>
                    alert('Invalid username or password.');
                    window.location.href='login.html';
                  </script>";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    header("Location: login.php"); // Redirect jika mencoba mengakses langsung file ini tanpa POST request
    exit();
}
?>
