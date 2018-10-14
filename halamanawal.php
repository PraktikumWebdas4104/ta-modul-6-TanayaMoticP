<?php echo "<center>";
include 'koneksi.php';
	session_start();

	if (isset($_SESSION["Nim"]) && isset($_SESSION["Password"])) {

		$que2 = "SELECT Nama, NIM, Kelas, JenisKelamin, Hobi, Fakultas, Alamat FROM form WHERE NIM ='$_SESSION[Nim]'";
		$qry2 = mysqli_query($conn,$que2);
		$row2 = mysqli_fetch_array($qry2);

			echo "<table border=1>
					<tr>
						<th>Nama</th>
						<th>Nim</th>
						<th>Kelas</th>
						<th>Jeniskl</th>
						<th>Hobi</th>
						<th>Fakultas</th>
						<th>Alamat</th>
					</tr>

					<tr>
						<td>".$row2[0]."</td>
						<td>".$row2[1]."</td>
						<td>".$row2[2]."</td>
						<td>".$row2[3]."</td>
						<td>".$row2[4]."</td>
						<td>".$row2[5]."</td>
						<td>".$row2[6]."</td>
					</tr>
				</table>";
		
			echo "<table>
					<tr>
						<td><a href='editprofil.php'>Edit</a></td>
						<td><a href='posting.php'>Posting</a></td>
						<td><a href='keluar.php'>Logout</a></td>
					</tr>
				</table>";
	}else{
		echo "Login gagal,klik <a href='masuk.php'>Login</a> kembali";
	}


 ?>