<?php
include "../koneksi.php";

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO guru VALUES('$nip', '$nama', '$alamat')");
header("location:index.php");
?>
