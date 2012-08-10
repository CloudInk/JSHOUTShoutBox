<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>J-SHOUT 1.3</title>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link href="css/shout_v3.css" rel="stylesheet" type="text/css" />
<script src='http://code.jquery.com/jquery-latest.js'></script>
<script type='text/javascript' language='javascript' src='js/js_v3.js'></script>
<script type='text/javascript' language='javascript' src='js/js_v3_refresh.js'></script>
<script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
</head>

<body>
<div id='notice'><img src='css/img/drag.png' /></div>
<div id='shout_container'>
  <div id='shout_header_container'>
    <div id='shout_header_top_heading'><a href='http://cloudink.info/development/j-shout'><strong>J-SHOUT</strong></a></div>
    <div id='shout_header_top_heading_left'>
      <div id='lock'></div>
    </div>
    <div id='shout_header_top_heading_online'>
      <div id='private'></div>
    </div>
    <div id='shout_header_top_heading_messages'>
      <div id='loading'></div>
    </div>
    <div id='shout_header_top_heading_minimize'></div>
    <div id='shout_header_entry_container'>
      <form name="jshout" id="jshout" method="post" action="js_v3_shout.php">
        <input name="sb" type="text" class='shouttext' id="sb" placeholder='shout'/>
        <input name="go" type="button" class='hidden'/>
      </form>
    </div>
    <div id='after_header_down'>
      <div id='center_content_messages'>
        <div id='center_content_loading'></div>
      </div>
      <div id='center_content_settings'>
        <div id='center_content_settings_container'>
          <div id='center_content_settings_text_left'>Keep Cookies</div>
          <div id='center_content_settings_text_right'>
            <input name="" type="checkbox" value="" class='settingtext' />
          </div>
        </div>
        <div id='center_content_settings_container'>
          <div id='center_content_settings_text_left'>Shout Name</div>
          <div id='center_content_settings_text_right'>Guest</div>
        </div>
        <div id='center_content_settings_container'>
          <div id='center_content_settings_text_left'>Last Login</div>
          <div id='center_content_settings_text_right'>-</div>
        </div>
        <div id='center_content_settings_container'>
          <div id='center_content_settings_text_left'>Last Shout</div>
          <div id='center_content_settings_text_right'>-</div>
        </div>
        <div id='center_content_settings_container'>
          <div id='center_content_settings_text_left'>Avatar</div>
          <div id='center_content_settings_text_right'>
            <div id='center_content_settings_button'><a href='javascript:void(0)' id='avatar_change'>CHANGE</a></div>
          </div>
        </div>
        <div id='center_content_settings_login'>
        </div>
      </div>
      <div id='center_content_history'> this is history </div>
    </div>
    <div id='shout_footer'>
      <div id='shout_footer_left'><a href='javascript:void(0)' id='shout_footer_left_link_hide'><img src='css/img/32x32clear.png' border='0' /></a></div>
      <div id='shout_footer_center'><a href='javascript:void(0)' id='shout_footer_history_show'><img src='css/img/32x32clear.png' border='0'/></a></div>
      <div id='shout_footer_right'><a href='javascript:void(0)' id='shout_footer_settings_show'><img src='css/img/32x32clear.png' border='0'/></a></div>
    </div>
  </div>
</div>
</body>
</html>
