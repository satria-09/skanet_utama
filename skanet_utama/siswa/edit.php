<?php
include "../koneksi.php";

$nis = $_GET['nis'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="nis" value="<?php echo $data['nis']; ?>">
        Nis : <?php echo $data['nis']; ?><br>
        Nama : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        Alamat : <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
