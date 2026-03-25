<?php
// ============================================================
// TAHAP 8: DASHBOARD + PROTEKSI HALAMAN DENGAN SESSION
// Halaman ini hanya bisa diakses kalau sudah login
// ============================================================

// session_start() → wajib ada di setiap halaman yang pakai $_SESSION
session_start();

// Cek apakah user sudah login (apakah session 'username' ada?)
// isset() → cek apakah variabel sudah di-set / tidak kosong
if (!isset($_SESSION['username'])) {
    // Kalau BELUM login → paksa balik ke halaman login
    header("Location: auth/login.php");
    exit(); // Hentikan eksekusi agar kode di bawah tidak jalan
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<!-- Session dipakai untuk menampilkan nama user yang login -->
<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>

<a href="tamu/form_tamu.php">Input Tamu</a><br>
<a href="tamu/data_tamu.php">Lihat Data Tamu</a><br>
<a href="auth/logout.php">Logout</a>

</body>
</html>