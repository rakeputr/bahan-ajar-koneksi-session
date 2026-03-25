<!DOCTYPE html>
<html>
<head>
    <title>Form Tamu Petshop</title>
</head>
<body>

<!-- ============================================================
     TAHAP 3: FORM INPUT TAMU
     Form HTML biasa, method POST agar data tidak terlihat di URL.
     action="proses_tamu.php" → data dikirim ke file proses_tamu.php
     ============================================================ -->

<h2>Form Kunjungan Petshop</h2>

<!-- method="POST" → data dikirim lewat body request, tidak tampil di URL -->
<form action="proses_tamu.php" method="POST">

    Nama: <br>
    <!-- name="nama" → ini adalah KEY yang akan ditangkap di $_POST['nama'] -->
    <input type="text" name="nama"><br><br>

    No HP: <br>
    <input type="text" name="no_hp"><br><br>

    Jenis Hewan: <br>
    <!-- name="hewan[]" → tanda [] artinya input ini bisa dipilih LEBIH DARI SATU (array) -->
    <input type="checkbox" name="hewan[]" value="Kucing"> Kucing
    <input type="checkbox" name="hewan[]" value="Anjing"> Anjing
    <input type="checkbox" name="hewan[]" value="Hamster"> Hamster<br><br>

    Tujuan: <br>
    <textarea name="tujuan"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>