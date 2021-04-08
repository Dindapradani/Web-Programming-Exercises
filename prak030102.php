<?php
function buatBintang($n){
	echo "<pre>";
	for ($i=0; $i<$n+1; $i++){
		for ($j=0; $j<$i; $j++){
			echo "*";
		}

		echo"\n";
	}
	echo"/pre";
}
buatBintang(4);
buatBintang(5);
?>
