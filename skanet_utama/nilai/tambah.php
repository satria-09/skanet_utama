<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "sukses") {
    header("location:../login.php");
    exit();
}
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Nilai</title>
</head>
<body>
    <h1>Tambah Data Nilai</h1>
    <form action="simpan.php" method="POST">
        
        <!-- Select Siswa -->
        Nama Siswa : 
        <select name="nis">
            <?php
            $q_siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
            while ($siswa = mysqli_fetch_array($q_siswa)) {
                echo "<option value='".$siswa['nis']."'>".$siswa['nama']."</option>";
            }
            ?>
        </select><br><br>

        <!-- Select Guru -->
        Nama Guru : 
        <select name="nip">
            <?php
            $q_guru = mysqli_query($koneksi, "SELECT * FROM guru");
            while ($guru = mysqli_fetch_array($q_guru)) {
                echo "<option value='".$guru['nip']."'>".$guru['nama']."</option>";
            }
            ?>
        </select><br><br>

        <!-- Select Mapel -->
        Mata Pelajaran : 
        <select name="id_mapel">
            <?php
            $q_mapel = mysqli_query($koneksi, "SELECT * FROM mapel");
            while ($mapel = mysqli_fetch_array($q_mapel)) {
                echo "<option value='".$mapel['id_mapel']."'>".$mapel['mapel']."</option>";
            }
            ?>
        </select><br><br>

        <!-- Input Nilai -->
        Nilai : <input type="number" name="nilai" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>