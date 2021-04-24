<?php
include("sambungan.php");

$IDPelajar = $_POST["IDPelajar"];

$sql = "delete from pelajar where IDPelajar = '$IDPelajar'";
$hasil = mysqli_query($sambungan, $sql);

if ($hasil == true)
    echo "berjaya padam";
else
    echo "tidak berjaya padam";




?>