<?php
include ('jShout_receiver.php');
$js = new jShout ( $_COOKIE ['jShout'] );
$sql = "SELECT * FROM jshout ORDER BY id DESC LIMIT 8";
$result = mysql_query ( $sql );
$count = mysql_num_rows ( $result );
mysql_query ( "UPDATE jshout_stats SET count='{$count}'" );

if (cfg::auth_shout) {
	if ($js->get_auth ( $_COOKIE ['jShout'] )) {
		while ( $row = mysql_fetch_array ( $result ) ) {
			$sql1 = "SELECT id,user FROM jshout_user WHERE user='{$row[3]}'";
			$resu = mysql_query ( $sql1 );
			$uid = mysql_fetch_row ( $resu );
			
			$data [] = array (
				0 => $row [0], 1 => $row [1], 2 => $row [2], 3 => $row [3] 
			);
		}
		if (! is_array ( $data )) {
			print ("Error getting data array") ;
			exit ();
		} else {
			$rev = array_reverse ( $data );
			foreach ( $rev as $key => $value ) {
				print ("<li><b><a href='javascript:void(0)' id='showid'>{$value[3]}</A></B>: &nbsp;&nbsp;{$value[1]}</li>") ;
			}
		}
	} else {
		//print ("You must login to see shouts.") ;
	}

} else {
	while ( $row = mysql_fetch_array ( $result ) ) {
		$sql1 = "SELECT id,user FROM jshout_user WHERE user='{$row[3]}'";
		$resu = mysql_query ( $sql1 );
		$uid = mysql_fetch_row ( $resu );
		
		$data [] = array (
			0 => $row [0], 1 => $row [1], 2 => $row [2], 3 => $row [3] 
		);
	}
	if (! is_array ( $data )) {
		print ("Error getting data array") ;
		exit ();
	} else {
		$rev = array_reverse ( $data );
		foreach ( $rev as $key => $value ) {
			print ("<li><b><a href='javascript:void(0)' id='showid'>{$value[3]}</A></B>: &nbsp;&nbsp;{$value[1]}</li>") ;
		}
	}
}
?>
