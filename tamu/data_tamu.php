<?php
include '../config/koneksi.php';

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

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['no_hp']; ?></td>
    <td><?= $row['jenis_hewan']; ?></td>
    <td><?= $row['tujuan']; ?></td>
</tr>
<?php } ?>


</table>
<a href="../index.php">Kembali ke Beranda</a><br>