<form method="POST" enctype="multipart/form-data">
	<center><table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="judul" placeholder="Judul"></td>
		</tr>

		<tr>
			<td>Masukkan Postingan</td>
			<td>:</td>
			<td><textarea name="post" placeholder="Tuliskan Sesuatu" rows="20" cols="80"></textarea></td>
		</tr>

		<tr>
			<td>Unggah Gambar</td>
			<td>:</td>
			<td><input type="file" name="gbr"></td>
		</tr>

		<tr>
			<td><a href="halamanawal.php"> Halaman Awal </a>
				<input type="submit" name="up"></td>
		</tr>
	</table>
</form>


<?php 

error_reporting(0);
session_start();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM post WHERE id = '$id'";

	if ($koneksi->query($sql)) {
		$result = $koneksi->query($sql);
		$row = $result->fetch_assoc();
	}
}else{
	if (isset($_POST['up'])) {
		include 'koneksi.php';
		$query=mysqli_query($conn, "SELECT NIM, Nama FROM form WHERE NIM='$_SESSION[Nim]'");
		$row=mysqli_fetch_Array($query);

			$nim =$row['NIM'];
			$nama =$row['Nama'];
			$judul =$_POST['judul'];
			$posting =$_POST['post'];
			$gambar =$_FILES["gbr"]["name"];

			if (!empty($judul)){
				if (!empty($posting)){
					if (str_word_count($posting)>=30){
						if (!empty($gambar)){
							$qry=$conn->query("INSERT INTO `post` (`NIM`, `Nama`, `Judul`, `Postingan`, `Gambar`)
														VALUES ('$nim', '$nama', '$judul', '$posting', '$gambar')");

							echo "Berhasil Diupload";
						}else{
							echo "Harap Masukkan Gambar";
						}
					}else{
						echo "Postingan anda harus 250 karakter";
					}
				}else{
					echo "Harap Memasukkan Postingan";
				}
			}else{
				echo "Harap Memasukkan Judul Anda";


			}
	}
}

 ?>