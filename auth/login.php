<!DOCTYPE html>
<html>
<head>
    <title>Login Petshop</title>
</head>
<body>

<!-- ============================================================
     TAHAP 6: FORM LOGIN
     Sebelum bisa akses dashboard, user harus login dulu.
     Konsep ini namanya AUTENTIKASI.
     ============================================================ -->

<h2>Login Petshop</h2>

<!-- Data login dikirim ke proses_login.php -->
<form action="proses_login.php" method="POST">

    Username: <br>
    <input type="text" name="username"><br><br>

    Password: <br>
    <!-- type="password" → input akan ditampilkan sebagai ●●●● -->
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>