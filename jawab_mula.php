<?php
include('sambungan.php');

session_start();
$IDPelajar = $_SESSION['username'];
$sql = "select * from kuiz where IDPelajar = '".$IDPelajar."'";
$data = mysqli_query($sambungan, $sql);

//semak samada pelajar dah jawab or belum

if (mysqli_num_rows($data) > 0) {
    header("Location:jawab_ulangkaji.php");
}
else 
    header("Location: jawab_soalan.php");
?>