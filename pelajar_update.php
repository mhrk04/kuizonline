<?php
include("sambungan.php");

$IDPelajar = $_POST["IDPelajar"];
$Nama_Pelajar = $_POST["Nama_Pelajar"];
$IDKelas = $_POST["IDKelas"];
$KataLaluan = $_POST["KataLaluan"];

$sql = "update pelajar set Nama_Pelajar = '$Nama_Pelajar', IDKelas ='$IDKelas', KataLaluan = '$KataLaluan' where IDPelajar = '$IDPelajar'";
$hasil = mysqli_query($sambungan, $sql);

if ($hasil == true)
    echo "berjaya kemaskini";
else
    echo "tidak berjaya kemaskini";




?>