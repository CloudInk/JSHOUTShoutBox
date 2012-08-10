$(document).ready(function(){
		$("#shout_container" ).draggable();
		$('#loading').fadeIn(100);
		$('#shoutbox').prepend("<li>Welcome to jShout v. 1 | a cloudink, inc. production</li>");
		$('#shoutbox').prepend("<li>http://code.google.com/p/j-shout/</li>");
		$('#shoutbox').prepend("<li>Loading....</li>");
		$('#shoutbox').delay(2000).load('jShout_refresh.php');
		$('#shoutbox').animate({scrollTop: $('#shoutbox').prop('scrollHeight') + $('#shoutbox').height() }, 1);
		$('#pmb').load('jShout_messaging_request.php');
		$('#pvt').load('jShout_messaging.php');
		$('#cuser').load('jShout_user.php');
		$('#history').load('jShout_history_refresh.php');
		$('#loading').fadeOut(2800);
		
			$('#shistory').live('click', function(){ 
				$('#historylabel').html("<a href='javascript:void(0)' id='hhistory'>History -</A>");
				$('#shoutbox').slideUp('slow');
				$('#shoutform').fadeOut(50);
				$('#history').delay(100).slideDown('slow');
			});
			
			$('#hhistory').live('click', function(){ 
				$('#historylabel').html("<a href='javascript:void(0)' id='shistory'>History +</A>");
				$('#history').slideUp('slow');
				$('#shoutbox').slideDown('slow');
				$('#shoutform').delay(500).fadeIn(100);
			});
			
			$('#shelp').live('click', function(){ 
				$('#help').delay(200).fadeIn(900);
				$('#helplabel').html("<a href='javascript:void(0)' id='hhelp'>Help -</A>");
			});
			
			$('#hhelp').live('click', function(){ 
				$('#help').delay(200).fadeOut(900);
				$('#helplabel').html("<a href='javascript:void(0)' id='shelp'>Help +</A>");
			});
			
			$('#msgs').live('click', function(){ 
				$('#pmbox').delay(200).fadeIn(400);
			});
			
			$('#pmclose').live('click', function(){ 
				$('#pmbox').delay(200).fadeOut(400);
			});

			$('#shout_footer_settings_show').live('click', function(){ 
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_center').html("<a href='javascript:void(0)' id='shout_footer_history_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_right').html("<a href='javascript:void(0)' id='shout_footer_settings_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#center_content_messages').fadeOut(400);
				$('#center_content_history').fadeOut(400);
				$('#center_content_messages').html('');
				$('#center_content_settings').delay(700).fadeIn(700);
			});

			$('#shout_footer_history_show').live('click', function(){ 
				$('#center_content_messages').html('');
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_center').html("<a href='javascript:void(0)' id='shout_footer_histor_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_right').html("<a href='javascript:void(0)' id='shout_footer_settings_show'><img src='css/img/32x32clear.png'border='0' /></a>");
				$('#center_content_messages').delay(200).fadeOut(400);
				$('#center_content_settings').delay(200).fadeOut(400);
				$('#center_content_messages').html('');
				$('#center_content_history').delay(700).fadeIn(700);
			});

			$('#shout_footer_left_link_hide').live('click', function(){ 
				
				$('#loading').fadeIn(100);
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_center').html("<a href='javascript:void(0)' id='shout_footer_history_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_right').html("<a href='javascript:void(0)' id='shout_footer_settings_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#center_content_history').delay(200).fadeOut(400);
				$('#center_content_settings').delay(200).fadeOut(400);
				$('#center_content_messages').fadeOut(299);
				$('#center_content_messages').html('');
					
				var url = "js_v3_msg.php";
				var sb = null;
				var jshout = "v_03";
				var req = "list_msg";
			
				$.post( url, {sb: sb, jshout: jshout, req: req },
				function( data ) {
					$('#center_content_messages').delay(502).html(data);
					$('#center_content_messages').fadeIn(299);
					$('#loading').fadeOut(100);
					$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				});
			});

			$('#infoclose').live('click', function(){ 
				$('#infobox').delay(200).fadeOut(600);
			});
			$("#jshout").submit(function(event) { 
				event.preventDefault(); 
				$('input[name="sb"]').prop('disabled', true);
				$('#loading').fadeIn(100);
				var $form = $( this ),
				sb = $form.find( 'input[name="sb"]' ).val(),
				url = $form.attr( 'action' );
				jshout = "v_01";
				req = "add_shout";
					if(sb == '') {
						$('#loading').fadeOut(100);
						$('input[name="sb"]').prop('disabled', false);
						return false;
					}
				$.post( url, {sb: sb, jshout: jshout, req: req },
					function( data ) {
						$('#shoutbox').append( "<li>" + data  + "</li>");
						$('#history').prepend( "<li>" + data  + "</li>");
						$('#shoutbox').animate({scrollTop: $('#shoutbox').prop('scrollHeight') - $('#shoutbox').height() }, 1);
						$('input[name=sb]').val( '' );
						$('input[name="sb"]').prop('disabled', false);
						$('#loading').fadeOut(100);
					});
			});
});