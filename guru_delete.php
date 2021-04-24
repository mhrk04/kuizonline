<?php
include("sambungan.php");

$IDGuru = $_POST["IDGuru"];

$sql = "delete from guru where IDGuru = '$IDGuru'";
$hasil = mysqli_query($sambungan, $sql);

if ($hasil == true)
    echo "berjaya padam";
else
    echo "tidak berjaya padam";




?>