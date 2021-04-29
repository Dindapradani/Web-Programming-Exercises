<?php
if (isset($_COOKIE ['username'])!= null){
	setcookie("bilrandom", null, time()+24*3600,"/");
	header ("Location: latihantebakangka.php");
}

else {
	?>
	<h1>GAME TEBAK ANGKA</h1>
	<form method = "post" action="login"> Username <input type = "text" name = "username">
		<input type = "submit" name = "login" value = "MULAI">
	</form>
	<?php

<?php
if (isset($_POST ['login'])){
	setcookie("username", $_POST['username'], time()+7*24*3600,"/");
	setcookie("bilrandom", null, time()+24*3600,"/");
	header ("Location: latihantebakangka.php");
}

}
?>