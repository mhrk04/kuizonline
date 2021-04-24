<?php
include('sambungan.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="senarai.css">
    <link rel="stylesheet" href="button.css">
</head>

<body>
    <form action="jawab_semak.php" method="POST">
        <table>
            <caption>SOALAN KUIZ ONLINE</caption>
            <tr>
                <th>Bil</th>
                <th>Soalan</th>
            </tr>
            <?php
            $sql = "select * from soalan order by IDSoalan ASC";
            $data = mysqli_query($sambungan, $sql);
            $bil = 1;
            while ($Soalan = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td class="bil"><?php echo $bil;?></td>
                <td>
                    <?php echo $Soalan['Nama_soalan'];?><br>
                    <input type="radio" name="<?php echo $Soalan['IDSoalan'];" value="A"><?php echo "A. ".$Soalan['Pilihan_A'];?><br>
                    <input type=" radio" name="<?php echo $Soalan['IDSoalan'];" value="B"><?php echo "B. ".$Soalan['Pilihan_B'];?><br>
                    <input type=" radio" name="<?php echo $Soalan['IDSoalan'];" value="C"><?php echo "C. ".$Soalan['Pilihan_C'];?><br>
                </td>
            </tr>
            <?php $bil = $bil + 1;} ?>
        </table>
        <button class=" semak" type="submit">Semak</button>
    </form>

</body>

</html>