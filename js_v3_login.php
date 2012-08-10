<?php
include ('js_v3.php');
$js = new jshout ( $_COOKIE ['jShout'] );
$g = $_GET;
$us = $_GET['u'];
if($_GET['u'] != '') {
	$result = mysql_query ( "SELECT id,user,last_login,cookies,last_shout FROM jshout_user WHERE id='{$us}'" );
	$data = mysql_fetch_row ( $result );

	
	$user = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>avatar</title>
	<link href='css/shout_v3.css' rel='stylesheet' type='text/css' />
	</head>
	<body>
	<div id='center_content_settings_container'>
	<div id='center_content_settings_text_left'>Shout Name</div>
	<div id='center_content_settings_text_right'><em>{$data[1]}</em></div>
	</div>
	<div id='center_content_settings_container'>
	<div id='center_content_settings_text_left'>Last Login</div>
	<div id='center_content_settings_text_right'>{$data[2]}</div>
	</div>
	<div id='center_content_settings_container'>
	<div id='center_content_settings_text_left'>Last Shout</div>
	<div id='center_content_settings_text_right'>{$data[4]}</div>
	</div>
	<div id='center_content_settings_login'>
	<div id='center_content_settings_login_header'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_entry_box'> </div>
	<div id='center_content_settings_login_entry_box'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>
	</div>
	</body>
	</html>

	";
	print($user);
	die();
}



if ($_GET ['req'] == "logout") {
	print("logging out...");
	$js->logout();
	$user = "<div id='center_content_settings_login_header'></div>
	<div id='center_content_settings_login_empty'>Login to J-SHOUT</div>
	<div id='center_content_settings_login_entry_box'>
	<input name='em' type='text' class='settingtext' id='em'/>
	</div>
	<div id='center_content_settings_login_entry_box'>
	<input name='pw' type='password' class='settingtext' id='pw'/>
	</div>
	<div id='center_content_settings_login_empty'><a href='javascript:void(0)' id='login_form'>LOG IN</a></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>";
	echo "{$user}";
	die();
}

$uname = $_COOKIE ['jShout'];
if (is_array ( $g ) && in_array ( 'v_03', $g ) && $g ['req'] == "login") {
	$udata = "/login " . $g ['em'] . " " . $g ['pw'];
	if ($js->login ( $udata )) {
		
		$result = mysql_query ( "SELECT id,user,last_login,cookies,last_shout FROM jshout_user WHERE user='{$uname}'" );
		$data = mysql_fetch_row ( $result );
		if ($data [3] == "1") {
			$check = "checked";
		} else {
			$check = "unchecked";
		}
		$img = $js->get_gravatar($_COOKIE ['jShout']);
		$user = "<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Keep Cookies</div>
  <div id='center_content_settings_text_right'>
    <input name='' type='checkbox' value='1' checked='$check' class='settingtext' />
  </div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Shout Name</div>
  <div id='center_content_settings_text_right'><em>{$data[1]} ({$data[0]})</em></div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Last Login</div>
  <div id='center_content_settings_text_right'>{$data[2]}</div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Last Shout</div>
  <div id='center_content_settings_text_right'>{$data[4]}</div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Avatar</div>
  <div id='center_content_settings_text_right'>
      [ <a href='javascript:void(0)' rel='js_v3_avatar.php' id='avatar_change'>Change</a> ]
  </div>
</div>
<div id='center_content_settings_login'>
  <div id='center_content_settings_login_header'></div>
  <div id='center_content_settings_login_empty'>You are logged in.</div>
  <div id='center_content_settings_login_entry_box'></div>
  <div id='center_content_settings_login_entry_box'>{$img}</div>
  <div id='center_content_settings_login_empty'></div>
  <div id='center_content_settings_login_empty'><a href='javascript:void(0)' id='logout'>LOG OUT</a></div>
  <div id='center_content_settings_login_empty'></div>
  <div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>
</div>
		";
	
	} else {
		$user = "<div id='center_content_settings_login_header'></div>
<div id='center_content_settings_login_empty'><strong>ERROR LOGGING IN</strong></div>
<div id='center_content_settings_login_entry_box'>
  <input name='em' type='text' class='settingtext' id='em'/>
</div>
<div id='center_content_settings_login_entry_box'>
  <input name='pw' type='password' class='settingtext' id='pw'/>
</div>
<div id='center_content_settings_login_empty'><a href='javascript:void(0)' id='login_form'>LOG IN</a></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'></div>
<div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>
</div>
	";
	}
} elseif (! $_COOKIE ['jShout']) {
	$user = "<div id='center_content_settings_login_header'></div>
	<div id='center_content_settings_login_empty'>Login to J-SHOUT</div> 
	<div id='center_content_settings_login_entry_box'>
	<input name='em' type='text' class='settingtext' id='em'/>
	</div>
	<div id='center_content_settings_login_entry_box'>
	<input name='pw' type='password' class='settingtext' id='pw'/>
	</div>
	<div id='center_content_settings_login_empty'><a href='javascript:void(0)' id='login_form'>LOG IN</a></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'></div>
	<div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>";
} elseif ($js->get_auth ( $user )) {
	$result = mysql_query ( "SELECT id,user,last_login,cookies,last_shout FROM jshout_user WHERE user='{$uname}'" );
	$data = mysql_fetch_row ( $result );
	if ($data [3] == "1") {
		$check = "checked";
	} else {
		$check = "unchecked";
	}
	$img = $js->get_gravatar($_COOKIE ['jShout']);
	$user = "<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Keep Cookies</div>
  <div id='center_content_settings_text_right'>
    <input name='' type='checkbox' value='1' checked='$check' class='settingtext' />
  </div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Shout Name</div>
  <div id='center_content_settings_text_right'><em>{$data[1]} ({$data[0]})</em></div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Last Login</div>
  <div id='center_content_settings_text_right'>{$data[2]}</div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Last Shout</div>
  <div id='center_content_settings_text_right'>{$data[4]}</div>
</div>
<div id='center_content_settings_container'>
  <div id='center_content_settings_text_left'>Avatar</div>
  <div id='center_content_settings_text_right'>
    [ <a href='javascript:void(0)' rel='js_v3_avatar.php' id='avatar_change'>Change</a> ]
  </div>
</div>
<div id='center_content_settings_login'>
  <div id='center_content_settings_login_header'></div>
  <div id='center_content_settings_login_empty'>You are logged in.</div>
  <div id='center_content_settings_login_entry_box'></div>
  <div id='center_content_settings_login_entry_box'>{$img}</div>
  <div id='center_content_settings_login_empty'></div>
  <div id='center_content_settings_login_empty'><a href='javascript:void(0)' id='logout'>LOG OUT</a> </div>
  <div id='center_content_settings_login_empty'></div>
  <div id='center_content_settings_login_empty'>J-SHOUT 1.3 - &copy; CloudInk, Inc.</div>
</div>
	";
} elseif ($_GET ['req'] == "logout") {
	
}
echo "{$user}";
?>
