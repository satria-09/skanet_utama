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
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1> 
    <a href="tambah.php">Tambah Data</a> <a href="../index.php">Kembali ke Menu</a><br><br>
    <table border="1">
        <tr>
            <td>Nis</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a href="edit.php?nis=<?php echo $data['nis']; ?>">Edit</a> | 
                <a href="hapus.php?nis=<?php echo $data['nis']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
