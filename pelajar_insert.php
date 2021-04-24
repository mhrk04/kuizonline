<?php
include("sambungan.php");

$IDPelajar = $_POST["IDPelajar"];
$Nama_Pelajar = $_POST["Nama_Pelajar"];
$IDKelas = $_POST["IDKelas"];
$KataLaluan = $_POST["KataLaluan"];


$sql = "insert into pelajar values('$IDPelajar', '$Nama_Pelajar', '$IDKelas', '$KataLaluan')";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";


?>