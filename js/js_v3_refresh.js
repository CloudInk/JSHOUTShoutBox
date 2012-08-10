$(document).ready(function(){
var history_refresh = setInterval(function()
		{	
			$('#loading').fadeIn(100);
			$('#private').load('js_v3_message_count.php');
			$('#lock').load('js_v3_user.php');
			$('#online').load('js_v3_user_status.php');
			$('#loading').fadeOut(300);
		}, 5000);

var v3_msgs = setInterval(function() {
	$('#center_content_messages').load('js_v3_msg.php');
}, 3000);

var user_refresh = setInterval(function()
		{	
			$('#loading').fadeIn(100);
			$('#center_content_settings').load('js_v3_login.php');
			$('#loading').fadeOut(300);
		}, 60000);

});
