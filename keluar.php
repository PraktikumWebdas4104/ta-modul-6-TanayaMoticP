<?php 

session_start();

unset($_SESSION["Nim"]);
unset($_SESSION["Pass"]);


session_destroy();
	echo "Berhasil logout,klik <a href= 'masuk.php'> Login </a>";

 ?>