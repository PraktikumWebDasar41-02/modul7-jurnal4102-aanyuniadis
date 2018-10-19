<!DOCTYPE html>
<html>
<head>
	<title> Jurnal 7</title>
</head>
<body>
<center>
	<h2> <b>Form Mahasiswa </b> </h2>
	<form action="" method="POST">
		<table>
			<tr>
				<td> NIM </td>
				<td> : </td>
				<td> <input type="text" name="nim" ></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td> Tanggal Lahir </td>
				<td> : </td>
				<td> <input type="date" name="tanggal_lahir" ></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td> : </td>
				<td> <select name = "jenis_kelamin">
						<option value="laki- laki">Laki - Laki</option>
					 	<option value="Perempuan">Perempuan</option>
					 </select>
				</td>
			</tr>
			<tr>
				<td> Program Studi </td>
				<td> : </td>
				<td>
					<select name="prodi">
						<option value="MI">Managemen Informatika </option>
						<option value="MP">Managemen Pemasaran </option>
						<option value="PH">Perhotelan</option>
						<option value="Sismul">Sistem Multimedia</option>
						<option value="TK">Teknik Komputer</option>
						<option value="IF">Teknik Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td valign="top"> Fakultas </td>
				<td> : </td>
				<td><input type="radio" name="fakultas" value="FIT"> Fakultas Ilmu Terapan <br>
				<input type="radio" name="fakultas" value="FIK"> Fakultas Industri kreatif <br>
				<input type="radio" name="fakultas" value="FIF"> Fakultas Informatika <br>
				<input type="radio" name="fakultas" value="FKB"> Fakultas Komunikasi Bisnis <br>
				<input type="radio" name="fakultas" value="FEB"> Fakultas Ekonomi Bisnis <br>
				<input type="radio" name="fakultas" value="FTE"> Fakultas Teknik Elektro <br>
				<input type="radio" name="fakultas" value="FRI"> Fakultas Rekayasa Industri <br></td>
			</tr>
			<tr>
				<td> Asal </td>
				<td> : </td>
				<td> <input type="text" name="asal" value=""></td>
			</tr>
			<tr>
				<td> Motto Hidup </td>
				<td> : </td>
				<td> <textarea name = "moto_hidup"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><center><input type="submit" name="submit" value="submit"></center></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
$konek = mysqli_connect("localhost","root","","jurnal7");
if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST ['tanggal_lahir'];
	$jenis_kelamin = $_POST ['jenis_kelamin'];
	$prodi = $_POST ['prodi'];
	$fakultas = $_POST ['fakultas'];
	$asal = $_POST ['asal'];
	$moto_hidup = $_POST ['moto_hidup'];

$query = "INSERT INTO jurnal_7(nim,nama,tanggal_lahir,jenis_kelamin,prodi,fakultas,asal,moto_hidup) VALUES ('$nim','$nama','$tanggal_lahir','$jenis_kelamin','$prodi','$fakultas','$asal','$moto_hidup')";

	if(mysqli_query($konek,$query)){
		echo "Data Telah Tersimpan"; 
		header("Location:home.php");
	}else{
	 	echo "Data Anda Gagal Tersimpan";
	}

}


?>
