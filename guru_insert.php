<?php
include("sambungan.php");

$IDGuru = $_POST["IDGuru"];
$Nama_Guru = $_POST["Nama_Guru"];
$KataLaluan = $_POST["KataLaluan"];


$sql = "insert into guru values('$IDGuru', '$Nama_Guru', '$KataLaluan')";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";


?>