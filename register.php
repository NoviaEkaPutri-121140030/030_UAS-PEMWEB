<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "koneksi.php"; // Pastikan file ini sudah berisi koneksi ke database

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash kata sandi sebelum menyimpan ke database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memeriksa apakah username atau email sudah digunakan
    $checkQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($koneksi, $checkQuery);

    if ($checkResult) {
        $existingUser = mysqli_fetch_assoc($checkResult);

        // Jika username atau email sudah digunakan
        if ($existingUser) {
            echo "<script>
                    alert('Username or email is already taken. Please try again.');
                    window.location.href='register.html';
                  </script>";
        } else {
            // Query untuk menyimpan pengguna baru ke database dengan kata sandi yang di-hash
            $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
            $insertResult = mysqli_query($koneksi, $insertQuery);

            if ($insertResult) {
                header("Location: index.php");
            } else {
                echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
            }
        }
    } else {
        echo "Error: " . $checkQuery . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    header("Location: register.php"); // Redirect jika mencoba mengakses langsung file ini tanpa POST request
    exit();
}
?>
