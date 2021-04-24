<?php
include("sambungan.php");

$IDSoalan = $_POST["IDSoalan"];
$Nama_Soalan = $_POST["Nama_Soalan"];
$Pilihan_A = $_POST["Pilihan_A"];
$Pilihan_B = $_POST["Pilihan_B"];
$Pilihan_C = $_POST["Pilihan_C"];
$Jawapan = $_POST["Jawapan"];
$IDGuru = $_POST["IDGuru"];


$sql = "insert into soalan values('$IDSoalan', '$Nama_Soalan', '$Pilihan_A', '$Pilihan_B', '$Pilihan_C', '$Jawapan', '$IDGuru')";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";


?>