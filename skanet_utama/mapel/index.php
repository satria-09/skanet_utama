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
    <title>Data Mapel</title>
</head>
<body>
    <h1>Data Mata Pelajaran</h1>
    <a href="tambah.php">Tambah Data</a> | <a href="../index.php">Kembali ke Menu</a><br><br>
    <table border="1">
        <tr>
            <td>ID Mapel</td>
            <td>Mata Pelajaran</td>
            <td>Aksi</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM mapel");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id_mapel']; ?></td>
            <td><?php echo $data['mapel']; ?></td>
            <td>
                <a href="edit.php?id_mapel=<?php echo $data['id_mapel']; ?>">Edit</a> | 
                <a href="hapus.php?id_mapel=<?php echo $data['id_mapel']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>