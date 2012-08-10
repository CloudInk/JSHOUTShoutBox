<?php
include ('js_v3.php');
$js = new jShout ( $_COOKIE ['jShout'] );
$jq = "$(document).ready(function(){" . "\n";
$result = mysql_query ( cfg::v3_msg_query );
while ( $row = mysql_fetch_array ( $result ) ) {
	$rid = rand(1111111, 9999999);
	$data [] = array (
		0 => $row [0], 1 => $row [1], 2 => $row [2], 3 => $row [3] , 4 => $rid
	);
	$resultsa = mysql_fetch_row(mysql_query("SELECT id FROM jshout_user WHERE user='{$row[3]}'"));
	
/* 	$jq .= " //js_v3_msg.php - generated - do not modify - change 0192 " . "\n";
	$jq .= "		$('#show_user_{$rid}').live('mousedown', function()" . "\n";
	$jq .= "		{" . "\n";
	$jq .= "		$('#show_user_{$rid}').each(function() {" . "\n";
	$jq .= "		var uda = {$rid};" . "\n";
	$jq .= "		var ud = $('#udiv').text();" . "\n";
	$jq .= "		$(this).qtip(" . "\n";
	$jq .= "		{" . "\n";
	$jq .= "		content: {" . "\n";
	$jq .= "		text: ''," . "\n";
	$jq .= "		ajax: {" . "\n";
	$jq .= "		url: $(this).attr('rel'), data: {u:ud}" . "\n";
	$jq .= "		}," . "\n";
	$jq .= "		title: {" . "\n";
	$jq .= "		text: 'User Info:', " . "\n";
	$jq .= "		button: true" . "\n";
	$jq .= "		}" . "\n";
	$jq .= "		}," . "\n";
	$jq .= "		position: {" . "\n";
	$jq .= "		at: 'bottom center', " . "\n";
	$jq .= "		my: 'top center'," . "\n";
	$jq .= "		viewport: $(window), " . "\n";
	$jq .= "		effect: false" . "\n";
	$jq .= "		}," . "\n";
	$jq .= "		show: {" . "\n";
	$jq .= "		event: 'click'," . "\n";
	$jq .= "		solo: true " . "\n";
	$jq .= "		}," . "\n";
	$jq .= "		hide: 'unfocus'," . "\n";
	$jq .= "		style: {" . "\n";
	$jq .= "		classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'" . "\n";
	$jq .= "		}" . "\n";
	$jq .= "		});" . "\n";
	$jq .= "		});" . "\n";
	$jq .= "		});" . "\n";
	
	 */
}
$jq .= "		});" . "\n";
$handle = fopen ( 'js/js_v3_users.js', "w" );
fwrite ( $handle, $jq );
fclose ( $handle );

if (! is_array ( $data )) {
	$js->sys_msg ( "Error getting data array." );
} else {
	
	foreach ( $data as $key => $value ) {
		if($value[3] == "j-Shout") {
			$dec = $value[1];
		} else {
			$dec = $js->js_v3_decrypt($value[1]);
		}
		
		if (cfg::hide_sys_messages && $value [3] == "j-Shout") {
			print ("<!-- System Message Skipped -->") ;
		} else {
			$value [1] = strip_tags ( wordwrap ( $value [1], 29, " " ) ) . "<br />";
			$img = $js->get_gravatar($value[3]);
			$lname = explode("@", $value[3]);
			print ("
					<div id='shout_msg_container'>
					<div id='shout_avatar_container'>{$img}</div>
					<div id='shout_stamp_container'><em>{$value[2]}</em></div>
					<div id='shout_user_container'><style> #udiv { display: none; } </style><div id='udiv'>{$value[3]}</div><em><a href='javascript:void(0)' rel='js_v3_login.php?u={$value[3]}' title='Click for info' id='show_user_{$value[4]}'>{$lname[0]}</A></em></div>
					<div id='shout_message'>
					<div id='shout_message_text'>{$dec}</div>
					</div></div>
					") ;
		}
	}
}

// v3_list_msg();
?>
