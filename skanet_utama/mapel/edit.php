<?php
include "../koneksi.php";

$id_mapel = $_GET['id_mapel'];
$query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id_mapel'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mapel</title>
</head>
<body>
    <h2>Edit Mata Pelajaran</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_mapel" value="<?php echo $data['id_mapel']; ?>">
        Mata Pelajaran : <input type="text" name="mapel" value="<?php echo $data['mapel']; ?>"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>