<!DOCTYPE html>
<html>
<head>
    <title>Form Tamu Petshop</title>
</head>
<body>

<h2>Form Kunjungan Petshop</h2>

<form action="proses_tamu.php" method="POST">
    Nama: <br>
    <input type="text" name="nama"><br><br>

    No HP: <br>
    <input type="text" name="no_hp"><br><br>

    Jenis Hewan: <br>
    <input type="checkbox" name="hewan[]" value="Kucing"> Kucing
    <input type="checkbox" name="hewan[]" value="Anjing"> Anjing
    <input type="checkbox" name="hewan[]" value="Hamster"> Hamster <br><br>

    Tujuan: <br>
    <textarea name="tujuan"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>