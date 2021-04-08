<?php
	function buatBintangLagi($n){
		echo "<pre>";
		for ($i>0; $i=$n; $i--){
			for ($j=0; $j<$i; $j++){
				echo "*";
			}

			echo"\n";
		}
		echo"/pre";
	}

buatBintangLagi(4);
?>
