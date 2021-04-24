<?php
include("sambungan.php");

$IDGuru = $_POST["IDGuru"];
$Nama_Guru = $_POST["Nama_Guru"];
$KataLaluan = $_POST["KataLaluan"];

$sql = "update guru set Nama_Guru = '$Nama_Guru', KataLaluan = '$KataLaluan' where IDGuru = '$IDGuru'";
$hasil = mysqli_query($sambungan, $sql);

if ($hasil == true)
    echo "berjaya kemaskini";
else
    echo "tidak berjaya kemaskini";




?>