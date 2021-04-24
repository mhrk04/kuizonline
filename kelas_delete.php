<?php
include ("sambungan.php");
$IDKelas = $_POST["IDKelas"];

$sql = "delete from kelas where IDKelas = '$IDKelas'";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya padam";
else
    echo "gagal padam";

?>