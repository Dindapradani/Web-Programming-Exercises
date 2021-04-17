<?php
	echo "<p align = 'center'><b> DATA MAHASISWA</b></p>";
	echo "<table border='1' align='center'>";
	echo "<thead>";
	echo "tr";
	echo "<td><b>No</b></td><td><b>NIM</b></td><td><b>Nama Mahasiswa</b></td><td><b>Tgl Lahir</b></td><td><b>Alamat</b></td><td><b>Usia (Thn)</b></td>";
	echo"</tr>";
	echo "</thead>";

	$namafile = "datamhs.dat";
	$myfile = fopen ($namafile, "r") or die(Tidak dapat membuka file");
		$jumlahData = 0;
		while (!feof($myfile)) {
			$read = fgets ($myfile);
			$isi = explode ("|", $read);
			$nim = $isi[0];
			$nama = $isi[1];
			$tglLahir = $isi[2];
			$alamat = $isi[3];

			$pecahTglLahir = explode ("-", $tglLahir);
			$tahunLahir = $pecahTglLahir[0];
			$sekarang = date("Y-m-d");
			$pecahSekarang = explode ("-", $sekarang);
			$TahunSekarang = $pecahSekarang[0];
			$usia = $TahunSekarang - $tahunLahir;
			$nomor = $jumlahData +1;
			echo "<tr>";
			echo "<td>".$nomor."</td>";
			echo "<td>".$nim."</td>";
			echo "<td>".$tglLahir."</td>";
			echo "<td>".$alamat."</td>";
			echo "<td>".$usia."</td>";
			echo "</tr>";
			$jumlahData++ ;
			
		}

		echo "</table>";
		echo "<p align = 'center'> Jumlah Mahasiswa : " .$jumlahData. "</php>";

		
		fclose($myfile);
?>