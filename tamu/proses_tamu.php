<?php
include '../config/koneksi.php';

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$hewan = implode(", ", $_POST['hewan']);
$tujuan = $_POST['tujuan'];

$query = "INSERT INTO tamu (nama, no_hp, jenis_hewan, tujuan)
          VALUES ('$nama', '$no_hp', '$hewan', '$tujuan')";

mysqli_query($conn, $query);

header("Location: data_tamu.php");
?>