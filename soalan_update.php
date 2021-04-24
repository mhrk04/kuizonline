<?php
include("sambungan.php");


$IDSoalan = $_POST["IDSoalan"];
$Nama_Soalan = $_POST["Nama_Soalan"];
$Pilihan_A = $_POST["Pilihan_A"];
$Pilihan_B = $_POST["Pilihan_B"];
$Pilihan_C = $_POST["Pilihan_C"];
$Jawapan = $_POST["Jawapan"];
$IDGuru = $_POST["IDGuru"];

$sql = "update soalan set Nama_Soalan = '$Nama_Soalan', Pilihan_A = '$Pilihan_A', Pilihan_B = '$Pilihan_B', Pilihan_C = '$Pilihan_C', Jawapan = '$Jawapan', IDGuru = '$IDGuru' where IDSoalan = '$IDSoalan'";

$hasil = mysqli_query($sambungan, $sql);
if ($hasil== true)
    echo "berjaya kemaskini";
else
    echo "tidak berjaya kemaskini";

?>