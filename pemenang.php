<?php  
 require 'fungsi.php';

//Menampilkan Daftar Pemenang
   $pemenang = query("SELECT peserta.no_urut, peserta.nama_peserta, hadiah.nama_hadiah FROM peserta, hadiah  WHERE peserta.menang = 'T' AND peserta.hadiah = hadiah.no_hadiah");

   
   
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Pemenang</title>
 </head>
 <body>
 	    <br>
 	    <br>
 	    <br>
 		<center><h1> DAFTAR PEMENANG </h1> </center>
 		<br>
 		<br>

 		<center>
 		<table border="1" cellpadding="12" cellspacing="0">
 			<tr>
 				<th>No. Undian</th>
 				<th>Nama Pemanang</th>
 				<th>Hadiah</th>
 			</tr>
 			<?php foreach ($pemenang as $list) :?>
 			<tr>
   				<td> <?= $list['no_urut']; ?> </td>
   				<td> <?= $list['nama_peserta']; ?> </td>
   				<td> <?= $list['nama_hadiah']; ?> </td>
 			</tr>
 			<?php endforeach ?>
 		</table
 		</center>

 </body>
 </html>
