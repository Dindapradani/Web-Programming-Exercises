<?php
	function hitungDenda($tglHarusKembali, $tglKembali) {
		$pecah1 = explode("-", $tglHarusKembali);
		$date1 = $pecah1[2];
		$month1 = $pecah1[1];
		$year1 = $pecah1[0];
		
		$pecah2 = explode("-", $tglKembali);
		$date2 = $pecah2[2];
		$month2 = $pecah2[1];
		$year2 = $pecah2[0];

		$jd1=GregorianToJD($month1, $date1, $year1);
		$jd2=GregorianToJD($month2, $date2, $year2);

		$selisihHariTerlambat =$jd2 - $jd1;
		$totalDenda = $selisihHariTerlambat * 3000;
		return $totalDenda;
	}

echo "Besar denda yang dibayarkan adalah : Rp " .hitungDenda("2021-01-03", "2021-01-05");
?>