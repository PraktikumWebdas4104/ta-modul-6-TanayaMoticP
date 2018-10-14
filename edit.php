<form method="POST">

	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="35" placeholder="Nama"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" placeholder="Nim"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI01">MI01<br>
			<input type="radio" name="kelas" value="MI02">MI02<br>
			<input type="radio" name="kelas" value="MI03">MI03<br>
			<input type="radio" name="kelas" value="MI04">MI04<br></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Berenang">Berenang
			<input type="checkbox" name="hobi" value="Bersepeda">Bersepeda
			<input type="checkbox" name="hobi" value="Bernyanyi">Bernyanyi</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
			<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>


		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>

	</table>
</form>

<?php 

session_start();
if (isset($_SESSEION["nim"]) && isset($_SESSEION["password"])) {
	if (isset($_POST['kirim'])) {
		include 'koneksi.php';
			$nama    	= $_POST['Nama'];
			$nim     	= $_POST['Nim'];
			$kelas   	= $_POST['Kelas'];
			$JK 	 	= $_POST['JK'];
			$hobi   	= $_POST['Hobi'];
			$fakultas 	= $_POST['Fakultas'];
			$alamat 	= $_POST['Alamat'];

			$qry = mysqli_query($koneksi, "UPDATE registrasi SET Nama = '$nama', Nim = '$nim', Kelas = '$kelas' , JK = '$JK', Hobi ='$hobi', Fakultas = '$fakultas', Alamat = '$alamat' WHERE nim ='$_SESSEION[Nim]'");

			echo "Data telah diubah";
			echo "<a href ='halamanawal.php'>Home</a>";

	}
}else{
	echo "Silahkan klik <a href='masuk.php'>Login</a> kembali";
}


 ?>