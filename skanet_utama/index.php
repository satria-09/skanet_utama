<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "sukses") {
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <h1>Menu Utama</h1>
    <a href="siswa">Data Siswa</a> | 
    <a href="guru">Data Guru</a> | 
    <a href="mapel">Data Mapel</a> | 
    <a href="nilai">Data Nilai</a> | 
    <a href="logout.php">Logout</a>
</body>
</html>
