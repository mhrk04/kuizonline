<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="borang.css">
    <link rel="stylesheet" href="button.css">
</head>

<body>
    <h3 class="panjang">PILIHAN JENIS LAPORAN</h3>
    <form class="panjang" action="laporan_cetak.php" method="POST">
        <select name='pilihan' id='pilihan' onchange='papar_pilihan()'>
            <option value="1">Semua Kelas dan Peratus</option>
            <option value="2">Mengikut Kelas</option>
            <option value="3">Mengikut Peratus</option>
            <option value="4">Mengikut Kelas dan Peratus</option>
        </select><br>
        <div id="kelas" style="display: none;">
            <select name="IDKelas">
                <?php
                include('sambungan.php');
                $sql = "select * from kelas";
                $data = mysqli_query($sambungan, $sql);
                while ($kelas = mysqli_fetch_array($data)) {
                    echo "<option value='$kelas[IDKelas]'>$kelas[Nama_Kelas]</option>";
                }
                ?>
            </select>
        </div>
        <div id="peratus" style="display: none;">
            <select name="peratus">
                <option value=80>Lebih 80</option>
                <option value=50>Lebih 50</option>
                <option value=0>Kurang 50</option>
            </select>
        </div>
        <button class="papar" type="submit">Papar</button>
    </form>
</body>

</html>