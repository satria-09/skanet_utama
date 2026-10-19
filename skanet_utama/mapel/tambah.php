<?php
include "../koneksi.php";

$mapel = $_POST['mapel'];

mysqli_query($koneksi, "INSERT INTO mapel (mapel) VALUES('$mapel')");
header("location:index.php");
?>