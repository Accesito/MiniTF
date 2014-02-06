<?php
//include ("/includes/config.php");
session_start();
header("Content-type: application/x-shockwave-flash");
if (isset($_SESSION['antihack'])) {
	
	echo file_get_contents ("./porra/juega.swf");
}
unset($_SESSION['antihack']);
?>
