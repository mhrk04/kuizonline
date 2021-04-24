<?php
include("sambungan.php");
session_start();
$IDPelajar = $_POST["IDPelajar"];
$sql = "delete from kuiz where IDPelajar = '$IDPelajar'";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya padam rekod";
else
    echo "tidak berjaya padam rekod";

?>