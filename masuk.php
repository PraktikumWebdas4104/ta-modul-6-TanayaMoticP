<form method="POST">

	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" placeholder="Nim"></td>
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
//error_reporting(0);
	if (isset($_POST['kirim'])) {
		session_start();
		include 'koneksi.php';

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$qry = mysqli_query($conn, "SELECT NIM, Pass FROM form WHERE NIM='$nim'");
		$row = mysqli_fetch_array($qry);

		if ($nim == $row['NIM'] && $pass == $row['Pass'] && !empty($nim) && !empty($pass)) {
			$_SESSION["Nim"]=$row['NIM'];
			$_SESSION["Password"]=$row['Pass'];

			header("location:halamanawal.php");
		}else{

			echo "Password/NIM salah";
		}

}
 ?>