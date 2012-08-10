<?php

include ('jShout_receiver.php');
$js = new jShout ( $_COOKIE ['jShout'] );

$sql = "SELECT * FROM jshout ORDER BY stamp DESC";
$result = mysql_query ( $sql );
if (cfg::auth_shout) {
	if ($js->get_auth ( $_COOKIE ['jShout'] )) {
		while ( $row = mysql_fetch_array ( $result ) ) {
			print ("<a title='{$row[2]}'><li><b>{$row[3]}:</B> {$row[1]}  <span class='tiny'>{$row[2]}</span></li></A>") ;
		}
	
	} else {
		//print ("You must be logged in to see history.") ;
	}
} else {
	while ( $row = mysql_fetch_array ( $result ) ) {
		print ("<a title='{$row[2]}'><li><b>{$row[3]}:</B> {$row[1]}  <span class='tiny'>{$row[2]}</span></li></A>") ;
	}

}

?>
