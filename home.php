<?php
$konek = mysqli_connect("localhost","root","","jurnal7");
$simpan = "SELECT nim, nama, prodi FROM jurnal_7";
$lihat = mysqli_query($konek,$simpan);
?>
<!DOCTYPE html>
<html>
<head>
	<title> jurnal7 HOME</title>
</head>
<body>
	<center>
		<h2><b> HOME DATA MAHASISWA</b></h2>
		<form action="" method="POST">
			<table border="3">
				<tr>
					<td><input type="submit" name="submit" value="INPUT"></td>
					<td><input type="text" name="nim" size = "55" placeholder="cari disini"></td>
					<td><input type="submit" name="cari" size = "50" value="cari"></td>
					<?php
						$lihat;
						if(isset($_POST['cari'])){
							$nim = $_POST['nim'];
							$cari = "SELECT nim, nama, prodi FROM jurnal_7 WHERE nim = '$nim'";
							$lihat = mysqli_query($konek,$cari);
						}
					?>
				</tr>
				<tr>
					<td> NIM </td>
					<td> Nama </td>
					<td> Prodi </td>
					<td> Action </td>
				</tr>
				<?php while ($data = mysqli_fetch_array($lihat)){?>
				<tr>
					<td><?php echo $data ['nim']?></td>
					<td><?php echo $data ['nama']?></td>
					<td><?php echo $data ['prodi']?></td>
					<td><input type="submit" name="hapus" value="hapus"></td>
			<?php } ?>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>