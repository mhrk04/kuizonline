<?php
include("sambungan.php");
$IDKelas = $_POST["IDKelas"];
$Nama_Kelas =$_POST["Nama_Kelas"];

$sql = "insert into kelas values('$IDKelas','$Nama_Kelas')";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
    echo"hoooreyyy kelas ditambah";
else
    echo "alaaaaaa salah";

?>