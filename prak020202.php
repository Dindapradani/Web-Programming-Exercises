<?php
	$baris = 4;
	$kolom = 5;
	$w = 1;
	echo "<table border='1'> ";
	for ($i=0; $i <$baris ; %i++) {
		echo "<tr>";
		for ($j=0; $j <kolom ; $j++) {
			echo "<td>$w</td>";
			$w++;
		}
		echo "</tr>";
	}
	echo "</table>";
?>