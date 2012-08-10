var tip_feed = setInterval(function()
{
	$('#shoutbox').load('jShout_refresh.php');
	$('#shoutbox').animate({scrollTop: $('#shoutbox').prop('scrollHeight') - $('#shoutbox').height() }, 1);
}, 1000);

var history_refresh = setInterval(function()
		{	
			$('#loading').fadeIn(100);
			$('#pmb').load('jShout_messaging_request.php');
			$('#pvt').load('jShout_messaging.php');
			$('#cuser').load('jShout_user.php');
			$('#history').load('jShout_history_refresh.php');
			$('#loading').fadeOut(300);
		}, 5000);

var v3_msgs = setInterval(function() {
	$('#center_content_messages').load('js_v3_msg.php');
}, 500);
