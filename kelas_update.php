<?php
include("sambungan.php");
$IDKelas = $_POST["IDKelas"];
$Nama_Kelas = $_POST["Nama_Kelas"];

$sql = "update kelas set Nama_Kelas = '$Nama_Kelas' where IDKelas = '$IDKelas'";

$hasil = mysqli_query($sambungan, $sql);
if ($hasil== true)
    echo "berjaya kemaskini";
else
    echo "tidak berjaya kemaskini";

?>