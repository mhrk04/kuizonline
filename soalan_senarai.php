<?php
include("sambungan.php");
?>
<html>
<head>
<link rel="stylesheet" href="senarai.css">    
</head>
<body>
    <table>
    <caption>SENARAI SOALAN</caption>
    <tr>
        <th>ID</th>
        <th>Soalan</th>
        <th>Pilihan A</th>
        <th>Pilihan B</th>
        <th>Pilihan C</th>
        <th>Jawapan</th>
        <th>ID Guru</th>
        </tr>
<?php
$sql = 'select * from soalan ';
$hasil = mysqli_query($sambungan, $sql);
while($soalan = mysqli_fetch_array($hasil)) {
echo '<tr><td>'.$soalan["IDSoalan"].'</td>
<td>'.$soalan["Nama_Soalan"].'</td>
<td>'.$soalan["Pilihan_A"].'</td>
<td>'.$soalan["Pilihan_B"].'</td>
<td>'.$soalan["Pilihan_C"].'</td>
<td>'.$soalan["Jawapan"].'</td>
<td>'.$soalan["IDGuru"].'</td>

</tr>';    
}
        
?>
    
    </table>
    
</body>

</html>