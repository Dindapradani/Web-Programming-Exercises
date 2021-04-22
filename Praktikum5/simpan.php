<?php
if (isset($_POST['submit'])) {
	$nim = $POST['nim'];
	$nama = $POST['nama'];
	$tglLahir = $POST['tgllhr'];
	$tmptLahir = $POST['tmptlhr'];

	if (empty($nim) || empty($tglLahir) || empty($tmptlahir)){
		echo "Maaf, lengkapi data terlebih dahulu <a href = 'tambahdata.html'> form </a> ";
	}
		else{
			$filename = "datamhs.dat";
			$datamhs = fopen($filename, "a") or die("Tidak dapat membuka file");
			fwrite($datamhs, $nim."|");
			fwrite($datamhs, $nama."|");
			fwrite($datamhs, $tglLahir."|");
			fwrite($datamhs, $tmptLahir."\n");
			fclose($datamhs);
			echo "Data berhasil ditambahkan";
		}
	}		
		else {
			echo "Maaf, data belum terisi. Silakan mengisi data kembali. <a href = 'tambahdata.html'> form </a>"
		}
	}
?>