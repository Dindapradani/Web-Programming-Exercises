<!DOCTYPE html>
<html>
<head>
	<title> Tabung </title>
</head>
<body>
		<h1 align = "center"> DATA UKURAN TABUNG </h1> ;
		<table border ="1" cellpadding = "3" align= "center">;
		<tr>
		<td>Nama Tabung</td>
		<td>Diameter</td>
		<td>Tinggi</td>
		<td>Luas</td>
		</tr>

	<?php
	 $namafile="datatabung.dat";
	 $tabungku = fopen($namafile, "r") or die ("Tidak dapat membuka file");

	 while (!feof ($tabungku)) {
	 	$buka = fgets($tabungku);
	 	$file = explode(",", $buka);

	 	echo "<tr>";
	 	echo "<td>" .$file[0]. "</td>";
	 	echo "<td>" .$file[1]. "</td>";
	 	echo "<td>" .$file[2]. "</td>";
	 	echo "<td> <a href = 'hitungLuas.php?n=$file[0]&d=$file[1]&t=file[2]'>view</a></td>";
	 	echo "</tr>";
	 }
	 fclose($tabungku);
	 ?>

	</table>
</body>
</html>