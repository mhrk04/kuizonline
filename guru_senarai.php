<?php
include("sambungan.php");
?>
<html>
<head>
<link rel="stylesheet" href="senarai.css">    
</head>
<body>
    <table>
    <caption>SENARAI NAMA GURU</caption>
    <tr class="senguru">
        <th>ID</th>
        <th>Nama</th>
        <th>Katalaluan</th>
        </tr>
<?php
$sql = 'select * from guru ';
$hasil = mysqli_query($sambungan, $sql);
while($guru = mysqli_fetch_array($hasil)) {
echo '<tr><td>'.$guru["IDGuru"].'</td>
<td>'.$guru["Nama_Guru"].'</td>
<td>'.$guru["KataLaluan"].'</td>

</tr>';    
}
        
?>
    
    </table>
    
</body>

</html>