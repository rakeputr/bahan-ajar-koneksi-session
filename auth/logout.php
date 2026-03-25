<?php
// ============================================================
// TAHAP 9: LOGOUT — HAPUS SESSION
// ============================================================

// Mulai session dulu agar bisa diakses dan dihapus
session_start();

// session_destroy() → hapus SEMUA data session di server
// Setelah ini $_SESSION['username'] tidak ada lagi
session_destroy();

// Redirect kembali ke halaman login
header("Location: login.php");
?>