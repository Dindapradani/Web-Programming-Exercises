</<?php 

	$nama = $_GET['n'];
	$diameter = $_GET ['d'];
	$tinggi = $_GET['t'];
	$jari2 = $diameter/2;

	$LuasTabung = 2 * 3.14 * $jari2 * ($jari2 + $tinggi);

	echo "Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $LuasTabung Satuan Luas";
	
 ?>