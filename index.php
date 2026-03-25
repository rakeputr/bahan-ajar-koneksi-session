<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>


<a href="tamu/form_tamu.php">Input Tamu</a><br>
<a href="tamu/data_tamu.php">Lihat Data Tamu</a><br>
<a href="auth/logout.php">Logout</a>

</body>
</html>