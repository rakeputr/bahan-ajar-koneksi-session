<?php
// ============================================================
// TAHAP 7: PROSES LOGIN + PENGGUNAAN SESSION
// SESSION = cara PHP "mengingat" siapa yang sudah login
// Session disimpan di SERVER, bukan di browser
// ============================================================

// session_start() → WAJIB dipanggil di awal sebelum pakai $_SESSION
// Fungsinya: mulai/lanjutkan session yang sudah ada
session_start();

include '../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk cek apakah username + password ada di database
$query = "SELECT * FROM user 
          WHERE username='$username' 
          AND password='$password'";

$result = mysqli_query($conn, $query);

// mysqli_fetch_assoc() → ambil hasilnya sebagai array
// Kalau user ditemukan → $data berisi data user
// Kalau tidak ditemukan → $data bernilai NULL / false
$data = mysqli_fetch_assoc($result);

if ($data) {
    // LOGIN BERHASIL
    // Simpan username ke SESSION agar "diingat" selama user browsing
    // $_SESSION adalah array global yang bisa diakses di semua halaman
    $_SESSION['username'] = $data['username'];

    // Redirect ke halaman utama
    header("Location: ../index.php");
} else {
    // LOGIN GAGAL → username/password salah
    echo "Login gagal!";
}
?>