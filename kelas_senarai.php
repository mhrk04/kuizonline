<?php
include("sambungan.php");
?>
<html>
<head>
<link rel="stylesheet" href="senarai.css">    
</head>
<body>
    <table>
    <caption>SENARAI KELAS</caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        </tr>
<?php
$sql = 'select * from kelas ';
$hasil = mysqli_query($sambungan, $sql);
while($kelas = mysqli_fetch_array($hasil)) {
echo '<tr><td>'.$kelas["IDKelas"].'</td>
<td>'.$kelas["Nama_Kelas"].'</td>

</tr>';    
}
        
?>
    
    </table>
    
</body>

</html>