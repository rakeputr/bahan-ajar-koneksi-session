<?php
// ============================================================
// TAHAP 5: MENAMPILKAN DATA TAMU DARI DATABASE
// ============================================================

include '../config/koneksi.php';

// SELECT * FROM tamu → ambil semua data dari tabel tamu
// Hasilnya berupa "result object" yang belum bisa langsung dipakai
$data = mysqli_query($conn, "SELECT * FROM tamu");
?>

<h2>Data Tamu Petshop</h2>

<table border="1">
<tr>
    <th>Nama</th>
    <th>No HP</th>
    <th>Hewan</th>
    <th>Tujuan</th>
</tr>

<?php
// mysqli_fetch_assoc() → ambil satu baris data sebagai array asosiatif
// while loop → terus ambil baris berikutnya sampai data habis
// Contoh $row: ['nama' => 'Budi', 'no_hp' => '08xx', ...]
while ($row = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['no_hp']; ?></td>
    <td><?= $row['jenis_hewan']; ?></td>
    <td><?= $row['tujuan']; ?></td>
</tr>
<?php } ?>

</table>
<a href="../index.php">Kembali ke Beranda</a>