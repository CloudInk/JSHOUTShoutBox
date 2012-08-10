<?php
$user = $_COOKIE ['jShout'];
if ($user) {
	$user = $_COOKIE ['jShout'];
} else {
	$user = "Guest";
}
require_once ('jShout_receiver.php');
$js = new jShout ( $_COOKIE ['jShout'] );
if ($js->get_auth ( $user )) {
	$s = "SELECT * FROM jshout_private ORDER BY id DESC";
	$q = mysql_query ( $s );
	$x = 0;
	while ( $row = mysql_fetch_array ( $q ) ) {
		if ($row [3] == $user) {
			print ("<a id='pmrow'><li><div id='pmlcontainter'><div id='pmleft'><B>{$row[2]}</B><div id='pm'>{$row[1]}</div></div><div id='pmright'>{$row[4]}</div></div></li></a>") ;
			$x++;
		}
	}
	if($x <= 0) {
		print("<a id='pmrow'><li><div id='pmlcontainter'><div id='pmleft'<B>No Messages</B><div id='pm'>You have 0 messages.</div></div><div id='pmright'></div></div></li></a>");
	}
} else {
	print("<a id='pmrow'><li><div id='pmlcontainter'><div id='pmleft'<B>ERROR</B><div id='pm'>You are not logged in.</div></div><div id='pmright'></div></div></li></a>");
}

?>
