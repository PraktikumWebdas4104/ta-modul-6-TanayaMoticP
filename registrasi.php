
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
			<td><input type="checkbox" name="hobi" value="Travelling">Travelling
			<input type="checkbox" name="hobi" value="Diving">Diving
			<input type="checkbox" name="hobi" value="Climbing">Climbing</td>
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
			<td><textarea name="alamat" placeholder="Alamat"></textarea></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass" placeholder="Password"></td>
		</tr>


		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>

	</table>
</form>

<?php 
error_reporting(0);
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "jurnal6";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$nama    	= $_POST['nama'];
	$nim     	= $_POST['nim'];
	$kelas   	= $_POST['kelas'];
	$JK 		= $_POST['jk'];
	$hobi   	= $_POST['hobi'];
	$fakultas 	= $_POST['fakultas'];
	$alamat 	= $_POST['alamat'];
	$pass 		= $_POST['pass'];

	$sql = $conn->query("INSERT INTO form
						 VALUES ('$nama','$nim','$kelas','$JK','$hobi','$fakultas','$alamat','$pass')");

	echo "Berhasil"."<br>";
	echo "<a href = 'masuk.php'>Klik</a> untuk proses berikutnya";
}
 ?>