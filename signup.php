<?php
include('sambungan.php');
if(isset($_POST['IDPelajar'])) {
	$IDPelajar = $_POST["IDPelajar"];
	$Nama_Pelajar = $_POST["Nama_Pelajar"];
	$IDKelas = $_POST["IDKelas"];
	$KataLaluan = $_POST["KataLaluan"];
	$sql = "insert into pelajar values('$IDPelajar', '$Nama_Pelajar', '$IDKelas', '$KataLaluan')";
	$result = mysqli_query($sambungan, $sql);
	if ($result)
		echo "<script>alert('Berjaya singup')</script>";
	else 
		echo "<script>alert('Tidak berjaya singup')</script>";
	echo "<script>window.location='login.php'</script>";

}

?>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body background=''>
	<center>
		<img alt="kemudian" src="tajuk1.png"><br>
		<img alt="kemudian" src="tajuk2.png">
	</center>
	
	<h3 class="panjang">SIGN UP</h3>
	<form class="panjang" action="signup.php" method="post">
		<table>
			<tr>
				<td>ID Pelajar</td>
				<td><input type="text" name="IDPelajar" placeholder="P001 max 4 char"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama_Pelajar"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<select name="IDKelas">
					<?php
					$sql = "select * from kelas";
					$data = mysqli_query($sambungan, $sql);
					while ($kelas = mysqli_fetch_array($data)) {
						echo "<option value='$kelas[IDKelas]'>$kelas[Nama_Kelas]</option>";
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="KataLaluan" placeholder="max 8 char"></td>
			</tr>
		</table>
		<button class="tambah" type="submit">Daftar</button>
		<button class="padam" type="button" onclick="window.location='login.php'">Batal</button>

	</form>




</body>