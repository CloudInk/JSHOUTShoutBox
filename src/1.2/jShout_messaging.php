<?php
$user = $_COOKIE['jShout'];
if($user) {
		$user = $_COOKIE['jShout'];
} else {
	$user = "Guest";
}
require_once('jShout_receiver.php');
$js = new jShout($_COOKIE['jShout']);
if($js->get_auth($user)) {
	$s = "SELECT * FROM jshout_private";
	$q = mysql_query ( $s );
	$x = 0;
	while ( $row = mysql_fetch_array ( $q ) ) {
		if ($row [3] == $user) {
			$x ++;
		}
	}
	if($x <= 0) {
		print("");
	} else {
		print("<img src='css/img/mail.png'></img>");
	}
} else {
	print ("");
}

?>
