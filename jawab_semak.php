<?php
    include('sambungan.php');
    session_start();
    $IDPelajar = $_SESSION['username'];
    date_default_timezone_set("Asia/Kuala_Lumpur");

    $Tarikh = date('d/m/Y');
    $sql = "select * from soalan order by IDSoalan ASC";
    $data = mysqli_query($sambungan, $sql);
    while ($Soalan = mysqli_fetch_array($data)) {
        $IDSoalan = $Soalan['IDSoalan'];
        $jawapanpelajar = $_POST['$IDSoalan'];
        $sql = "insert into kuiz values('$IDPelajar','$IDSoalan', '$Tarikh', '$jawapanpelajar',0)";
        $datakuiz = mysqli_query($sambungan, $sql);
    }
    include('jawab_ulangkaji.php');
?>