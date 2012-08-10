<?php
session_start();
$u_agent = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/MSIE/i',$u_agent))
{
	echo "get a real browser and try agian!";
	die();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jShout 1.2</title>
<link href="shout.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link href="css/shout_v3.css" rel="stylesheet" type="text/css" />
<script src='http://code.jquery.com/jquery-latest.js'></script>
<script type='text/javascript' language='javascript' src='jShout.js'></script>
<script type='text/javascript' language='javascript' src='jShout.refresh.js'></script>
<script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
</head>

<body>
<div id='heading'>J-Shout</div>
<div id='links2'><a href='v3.php'>Click Here for  Version 1.3 Beta</a></div>
<div id='content'>
  <div id='history'></div>
  <div id='shoutbox'></div>
  <div id='loading'><img src='loading_sm.gif' /></div>
  <div id='shoutform'>
    <form name="jshout" id="jshout" method="post" action="jShout.php">
      <input name="sb" type="text" class='shoutboxtextbox' id="sb"/>
      <input name="go" type="button" class='hidden'/>
    </form>
  </div>
  <div id='pvt'><a href='javascript:void(0)' id='shistory'>Messages (-)</a></div>
  <div id='historylabel'><a href='javascript:void(0)' id='shistory'>History +</a></div>
  <div id='helplabel'><a href='https://ewsdata.com/bugs/enter_bug.cgi?product=J-SHOUT' target="_new">Bugs</a></div>
  <div id='cuser'><a href='javascript:void(0)' id=''></a></div>
  <div id='help'></div>
  <div id='infobox'></div>
</div>
<div id='pmbox'>
  <div id='pmheader'>
    <div id='pmcontainter'>
      <div id='pmleft'>Private Messages</div>
      <div id='pmright'><a href='javascript:void(0)' id='pmclose'>[X]</a></div>
      <div id='pmb'></div>
    </div>
  </div>
</div>
</body>
</html>
