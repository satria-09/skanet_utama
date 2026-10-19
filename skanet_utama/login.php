<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pas'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['status'] = "sukses";
        $_SESSION['username'] = $username;
        header("location:index.php");
    } else {
        echo "Login gagal!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pas"><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
