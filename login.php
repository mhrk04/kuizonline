<?php
include('sambungan.php');
session_start();

if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $KataLaluan = $_POST['KataLaluan'];

    $sql = "select * from pelajar";
    $result = mysqli_query($sambungan, $sql);
    $jumpa = FALSE;
    while($pelajar = mysqli_fetch_array($result)){
        if ($pelajar['IDPelajar'] == $userid && $pelajar["KataLaluan"] == $KataLaluan){
            $jumpa = TRUE;
            $_SESSION['username'] = $pelajar['IDPelajar'];
            $_SESSION['nama'] = $pelajar[Nama_Pelajar];
            $_SESSION['status'] = 'pelajar';
            break;
        }

    }
    if ($jumpa == FALSE) {
        $sql = "select * from guru";
        $result = mysqli_query($sambungan, $sql);
        while ($guru = mysqli_fetch_array($result)) {
            if ($guru[IDGuru] == $userid && $guru["KataLaluan"] == $KataLaluan) {
                $jumpa = TRUE;
                $_SESSION[username] = $guru['IDGuru'];
                $_SESSION['nama'] = $guru['Nama_Guru'];
                $_SESSION['status'] = 'guru';
                break;
            }
        }
    }
    if ($jumpa == TRUE) {
        header("Location: utama.html");
    }
    else
        echo "<script>alert('kesalahan pada username atau katalaluan');window.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="borang.css">
    <link rel="stylesheet" href="button.css">
</head>
<body background=''>
    <center>
    <img src=""><br><img src="">
    </center>
    <h3 class="pendek">SIGN IN</h3>
    <form class="pendek" action="login.php" method="POST" class="login">
        <table>
            <tr>
                <td><img src="user.png"></td>
                <td><input type="text" name="userid" placeholder="ID Pengguna"></td>
            </tr>
            <tr>
                <td><img src="lock.png" alt="lock"></td>
                <td><input type="text" name="KataLaluan" placeholder="Kata Laluan"></td>
            </tr>
        </table>
        <button class="login" type="submit">Login</button>
        <button class="signup" type="button" onclick="window.location='signup.php'">Sign Up</button>
    </form>
</body>
</html>