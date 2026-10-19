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
    <title>Data Nilai</title>
</head>
<body>
    <h1>Data Nilai</h1>
    <a href="tambah.php">Tambah Data</a> | <a href="../index.php">Kembali ke Menu</a><br><br>
    <table border="1">
        <tr>
            <td>ID Nilai</td>
            <td>Nama Siswa</td>
            <td>Nama Guru</td>
            <td>Mapel</td>
            <td>Nilai</td>
            <td>Aksi</td>
        </tr>
        <?php
        $sql = "SELECT nilai.id_nilai, siswa.nama AS nama_siswa, guru.nama AS nama_guru, mapel.mapel, nilai.nilai 
                FROM siswa, guru, mapel, nilai 
                WHERE nilai.nis = siswa.nis 
                AND nilai.nip = guru.nip 
                AND nilai.id_mapel = mapel.id_mapel";
                
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id_nilai']; ?></td>
            <td><?php echo $data['nama_siswa']; ?></td>
            <td><?php echo $data['nama_guru']; ?></td>
            <td><?php echo $data['mapel']; ?></td>
            <td><?php echo $data['nilai']; ?></td>
            <td>
                <a href="hapus.php?id_nilai=<?php echo $data['id_nilai']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>