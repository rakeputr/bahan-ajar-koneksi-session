<?php
// ============================================================
// TAHAP 2: KONEKSI DATABASE
// File ini adalah "jembatan" antara PHP dan MySQL.
// Akan di-include oleh semua file yang butuh akses database.
// ============================================================

$hostname = "localhost";  // server database, default localhost
$username = "root";       // user MySQL default di XAMPP
$password = "";           // password MySQL, default kosong di XAMPP
$database = "petshop";    // nama database yang kita buat tadi

// mysqli_connect() → fungsi bawaan PHP untuk konek ke MySQL
$conn = mysqli_connect($hostname, $username, $password, $database);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
    // die() → hentikan script dan tampilkan pesan error
}

// Kalau sampai sini, berarti koneksi BERHASIL
?>