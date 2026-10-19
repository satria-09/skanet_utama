<?php
include "../koneksi.php";

$nip = $_GET['nip'];
$query = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Guru</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="nip" value="<?php echo $data['nip']; ?>">
        Nip : <?php echo $data['nip']; ?><br>
        Nama : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        Alamat : <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
