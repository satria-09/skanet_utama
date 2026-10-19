<?php
include "../koneksi.php";

$nip = $_GET['nip'];
mysqli_query($koneksi, "DELETE FROM guru WHERE nip='$nip'");
header("location:index.php");
?>
