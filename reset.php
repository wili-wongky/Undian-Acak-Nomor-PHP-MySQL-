<?php  
  require 'fungsi.php';

  update("UPDATE peserta SET menang = 'F', hadiah = 0");
  update("UPDATE hadiah SET sudah_keluar = 'F'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESET DATABASE</title>
</head>
<body>
		<center>
			<br>
			<br>
			<br>
			<h2> Database Berhasil di Reset</h2>
			<br>
			<br>
			<br>
		</center>
</body>
</html>