<?php
session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user 
          WHERE username='$username' 
          AND password='$password'";

$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {
    $_SESSION['username'] = $data['username'];
    header("Location: ../index.php");
} else {
    echo "Login gagal!";
}
?>