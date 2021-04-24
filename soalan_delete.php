<?php
include ("sambungan.php");
$IDSoalan = $_POST["IDSoalan"];

$sql = "delete from soalan where IDSoalan = '$IDSoalan'";
$hasil = mysqli_query($sambungan, $sql);
if ($hasil == true)
    echo "berjaya padam";
else
    echo "gagal padam";

?>