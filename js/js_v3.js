$(document).ready(function(){
		
		var debug_code = true;
		var do_work = true;
	
		var v3_login = 'js_v3_login.php';
		
		debug("J-SHOUT js_v3.js", "Start up...");
		$("#shout_container" ).draggable();
		$("#notice" ).draggable();
		$('#center_content_loading').fadeIn(100);
		$('#loading').fadeIn(100);
		$('#shoutbox').delay(2000).load('js_v3_msg.php');
		$('#center_content_settings').load('js_v3_login.php');
		$('#pmb').load('jShout_messaging_request.php');
		$('#pvt').load('jShout_messaging.php');
		$('#cuser').load('jShout_user.php');
		$('#notice').load('js_v3_message.php');
		$('#history').load('jShout_history_refresh.php');
		$('#loading').fadeOut(2800);
		$('#center_content_loading').fadeOut(2800);
		$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_hide'><img src='css/img/32x32clear.png' /></a>");
	
				
			$('#shout_header_top_heading_minimize').live('click', function(){ 
				$("#shout_container").css('left', function(){ return $(this).offset().left; })
             .animate({"left":"2px"}, 200).animate({"top":"2px"}, 100).height(49);
			 $("#after_header_down").slideUp("slow"); 
			 $("#shout_footer").slideUp("slow");
			});
	
				
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
				$('#center_content_loading').fadeIn(100);
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_center').html("<a href='javascript:void(0)' id='shout_footer_history_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_right').html("<a href='javascript:void(0)' id='shout_footer_settings_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#center_content_messages').fadeOut(400);
				$('#center_content_history').fadeOut(400);
				$('#center_content_settings').delay(700).fadeIn(700);
				$('#center_content_loading').fadeOut(1000);
				$('#center_content_settings').load('js_v3_login.php');
			});

			$('#shout_footer_history_show').live('click', function(){ 
				$('#center_content_loading').fadeIn(100);
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_center').html("<a href='javascript:void(0)' id='shout_footer_histor_hide'><img src='css/img/32x32clear.png' border='0'/></a>");
				$('#shout_footer_right').html("<a href='javascript:void(0)' id='shout_footer_settings_show'><img src='css/img/32x32clear.png'border='0' /></a>");
				$('#center_content_messages').delay(200).fadeOut(400);
				$('#center_content_settings').delay(200).fadeOut(400);
				$('#center_content_history').delay(700).fadeIn(700);
				$('#center_content_loading').fadeOut(1000);
			});
				
			
			$('#shout_footer_left_link_show').live('click', function(){ 
				$('#center_content_loading').fadeIn(100);
				$('#loading').fadeIn(100);
				$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
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
					$('#shout_footer_left').html("<a href='javascript:void(0)' id='shout_footer_left_link_show'><img src='css/img/32x32clear.png' border='0'/></a>");
				});
				$('#center_content_loading').fadeOut(1000);
			});

			$('#infoclose').live('click', function(){ 
				$('#infobox').delay(200).fadeOut(600);
			});
			
			$("#login_form").live('click', function(event) { 
				event.preventDefault(); 
				
				
				em = $('input[name="em"]' ).val();
				pw = $( 'input[name="pw"]' ).val();
				url = "js_v3_login.php?em="+em+"&pw="+pw+"&jshout=v_03&req=login";
				$('#center_content_settings').html("<div id='center_content_loading'></div>");
				$('#center_content_loading').fadeIn(100);
				$.get( url, function( data ) {
						$("#center_content_settings").html('');
						$("#center_content_settings").load('js_v3_login.php');
						$('#center_content_loading').fadeOut(100);
					});
			});

			$("#logout").live('click', function(event) { 
				event.preventDefault(); 
				url = "js_v3_login.php?jshout=v_03&req=logout";
				$('#center_content_settings').html("<div id='center_content_loading'></div>");
				$('#center_content_loading').fadeIn(100);
				$.get( url, function( data ) {
					$("#center_content_settings").html('');
					$("#center_content_settings").load('js_v3_login.php');
					$('#center_content_loading').fadeOut(100);
					debug(data, "logout");
					});
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
						$('input[name=sb]').val( '' );
						$('input[name="sb"]').prop('disabled', false);
						$('#loading').fadeOut(100);
					});
			});
			//$('#center_content_settings_login').html("<form name='login_form' id='login_form' method='post' action='js_v3_login.php'><input name='em' type='text' class='settingtext' id='em' placeholder='user'/><BR><input name='pw' type='password' class='settingtext' id='pw' placeholder='pass'/><BR><input name='lb' type='button' value='login' class='settingtext'/></form>");
			
			
			function debug(message, caller) {
				if(debug_code) {
				$('#notice').html('');
				$('#notice').html("Raw Data Returned:<BR><BR><textarea name='textarea' id='textarea' cols='60' rows='5' class='settingtext'>"+message+"</textarea><BR><BR>Called From:<BR><BR><code>"+caller+"</code>");
				$('#notice').fadeIn(400);
				return;
				} else {
					return;
				}
			}
			
			$('#avatar_change').live('mousedown', function()
					{
						debug("Click Detected", "#avatar_change");
						$(this).qtip(
						{
							
							content: {
							
								text: '<img class="throbber" src="css/img/loading_sm.gif" alt="Loading..." />',
								ajax: {
									url:  $(this).attr('rel')
								},
								title: {
									text: 'Change Avatar', 
									button: true
								}
							},
							position: {
								at: 'bottom center', 
								my: 'top center',
								viewport: $(window), 
								effect: false
							},
							show: {
								event: 'click',
								solo: true 
							},
							hide: 'unfocus',
							style: {
								classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'
							}
						});
						
					});
					
			
});