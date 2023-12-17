<?php
session_start();

// Hancurkan semua sesi
session_destroy();

// Redirect ke halaman login
header("Location: login.html");
exit();
?>