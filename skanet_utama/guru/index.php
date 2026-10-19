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
    <title>Data Guru</title>
</head>
<body>
    <h1>Data Guru</h1>
    <a href="tambah.php">Tambah Data</a> <a href="../index.php">Kembali ke Menu</a><br><br>
    <table border="1">
        <tr>
            <td>Nip</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM guru");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['nip']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a href="edit.php?nip=<?php echo $data['nip']; ?>">Edit</a> | 
                <a href="hapus.php?nip=<?php echo $data['nip']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
