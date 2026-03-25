<?php
// ============================================================
// TAHAP 4: PROSES SIMPAN DATA TAMU KE DATABASE
// File ini menerima data dari form_tamu.php dan menyimpan ke DB
// ============================================================

// include → "gabungkan" file koneksi ke file ini
// Pakai ../ karena file ini ada di folder tamu/, naik satu level
include '../config/koneksi.php';

// $_POST['nama'] → ambil data yang dikirim dari form dengan name="nama"
$nama   = $_POST['nama'];
$no_hp  = $_POST['no_hp'];
$tujuan = $_POST['tujuan'];

// $_POST['hewan'] → hasilnya berupa ARRAY karena pakai name="hewan[]"
// Contoh: ["Kucing", "Anjing"]
// implode() → gabungkan array menjadi string dengan pemisah ", "
// Hasilnya: "Kucing, Anjing"
$hewan = implode(", ", $_POST['hewan']);

// Buat query INSERT untuk menyimpan data ke tabel tamu
$query = "INSERT INTO tamu (nama, no_hp, jenis_hewan, tujuan)
          VALUES ('$nama', '$no_hp', '$hewan', '$tujuan')";

// mysqli_query() → jalankan query ke database
// $conn → koneksi yang sudah dibuat di koneksi.php
mysqli_query($conn, $query);

// Setelah simpan, redirect ke halaman data_tamu.php
header("Location: data_tamu.php");
?>