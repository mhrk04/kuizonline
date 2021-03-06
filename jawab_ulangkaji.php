<?php
include('sambungan.php');
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="senarai.css">
</head>
<body>
  <table>
    <caption>SKEMA DAN KEPUTUSAN</caption>
    <tr>
      <th>Bil</th>
      <th>Soalan</th>
      <th>Skema</th>
    </tr>
    <?php
      $jumlah = 0;
      $betul = 0;
      $IDPelajar = $_SESSION['username'];
      $sql = "SELECT * FROM `kuiz` JOIN soalan on kuiz.IDSoalan = soalan.IDSoalan WHERE IDPelajar = '".$IDPelajar."'";
      $data = mysqli_query($sambungan, $sql);
        $bil = 1;
        while ($kuiz = mysqli_fetch_array($data)) {
        ?>
<tr>
  <td class="bil"><?php echo $bil;?></td>
  <td class="soalan">
    <?php
    echo $kuiz['Nama_Soalan']."<br>";
    echo "A.".$kuiz['Pilihan_A']."<br>;
    echo "B.".$kuiz['Pilihan_B']."<br>;
    echo "C.".$kuiz['Pilihan_C']."<br>;
    ?>
  </td>
  <td class="skema">
    <?php
      echo "Jawapannya :".$kuiz['Jawapan']."<br>";
      echo "Anda pilih ".$kuiz['Pilihan']."<br>";
      if ( $kuiz['Pilihan'] == $kuiz['Jawapan']){
        echo "<img src="img/betul.png">";
        $betul = $betul + 1;
      }
      else
        echo "<img src='img/salah.png'>"
        ?>
  </td>
</tr>
<?php
  $bil = $bil + 1;
  $jumlah = $jumlah + 1;
}
?>
</table>
<?php
  $Peratus = $betul/$jumlah * 100;
  $salah = $jumlah - $betul;

$sql = "update kuiz set Peratus = $Peratus where IDPelajar = '".IDPelajar."'";
$data = mysqli_query($sambungan, $sql);
?>
<table>
  <caption>KEPUTUSAN PRESTASI INDIVIDU</caption>
  <tr>
    <th class="keputusan">Perkara</th>
    <th class="keputusan">Bilangan</th>
  </tr>
  <tr>
    <td class="keputusan">Bilangan yang betul</td>
    <td class="keputusan"><?php echo $betul; ?></td>
  </tr>
  <tr>
    <td class="keputusan">Jumlah soalan</td>
    <td class="keputusan"><?php echo $jumlah; ?></td>
  </tr>
  <tr>
    <td class="keputusan">Keputusan</td>
    <td class="keputusan"><?php echo number_format($Peratus,0); ?> % </td>
  </tr>
</table>
</body>

</html>