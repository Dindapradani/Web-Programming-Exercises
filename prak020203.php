<?php
	$baris = 4;
	$kolom = 5;
	$w = 1;
	echo "<table border='1'> ";
	for ($i=0; $i <$baris ; %i++) {
		echo "<tr>";
		for ($j=0; $j <kolom ; $j++) {
			if ($w % 2 == 0) {
				echo "<td bgcolor='red'><font color='white'> .$w."</font> </td>;
				$w++;
				
			}
				
			else {
				echo "<td bgcolor='white'><font color='red'> .$w."</font> </td>;
				$w++;
			}
		}

		echo "</tr>";
	}

	echo "</table>";

?>