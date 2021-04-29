<?php
setcookie("username", null, time()-1, /);
header ("Location: login.php");

?>