<?php
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
	if (isset($_COOKIE['bilrandom']) == null){
		setcookie("bilrandom", rand(0, 100), time() + 24*3600,"/");
		echo "<p> Halo " .$_COOKIE['username']. ", nama Saya Mrs. PHP. Saya telah memilih secara random bilangan bulat antara 0-100. Silakan anda tebak.</p>";

		<form method = "post" action=:"latihantebakangka.php">
			Bilangan tebakan Anda adalah <input type = "text" name="tebakanmu"
			<input type = "submit" name = "submit" value = "cek">
		</form>

		<?php
	}
	if (isset($_COOKIE['bilrandom']) != null) {
		if (isset ($POST['submit'])){
			if ($_POST ['tebakanmu'] > $_COOKIE ['bilrandom']) {
				echo "<p> Halo, nama Saya Mrs. PHP. Saya telah memilih secara random bilangan bulat antara 0-100. Silakan anda tebak.</p>";
		echo "<p> Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.</p>";
		?>
		<form method = "post" action=:"latihantebakangka.php">
			Bilangan tebakan Anda adalah <input type = "text" name="tebakanmu"
			<input type = "submit" name = "submit" value = "Cek">
		</form>

		<?php
		}else if($_POST['tebakanmu'] <$_COOKIE['bilrandom']){
			echo "<p> Halo, nama Saya Mrs. PHP. Saya telah memilih secara random bilangan bulat antara 0-100. Silakan anda tebak.</p>";
			echo "<p> Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.</p>";
			?>

			<form method = "post" action=:"latihantebakangka.php">
			Bilangan tebakan Anda adalah <input type = "text" name="tebakanmu"
			<input type = "submit" name = "submit" value = "Cek">
		</form>

		<?php
		}else if($_POST['tebakanmu'] <$_COOKIE['bilrandom']){
			echo "<p> Halo, nama Saya Mrs. PHP. Saya telah memilih secara random bilangan bulat antara 0-100. Silakan anda tebak.</p>";
			echo "<p> Waaah… selamat ya.. tebakan anda benar. Saya telah memilih bilangan " .$_COOKIE['bilrandom'].".</p>";
			setcookie("bilrandom", null, time() + 24*3600,"/");
			echo "<p> <a href= 'latihantebakangka.php'> Ulangi Lagi </a> </p>";
			echo "<p> <a href= 'exit.php'> Keluar </a> </p>";
			}
}
}
}if (!isset ($_COOKIE['username'])){
	echo " <p> Silahkan <a href = 'login.php'>Login</a> terlebih dahulu. </p> ";
}
?>