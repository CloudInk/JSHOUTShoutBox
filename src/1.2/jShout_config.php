<?php
interface cfg {
	//database host
	const db_host = 'localhost';
	//database password
	const db_pass = '14597q30';
	//database user
	const db_user = 'root';
	//database name
	const db_name = 'jshout';
	//allow new registrations
	const allow_registration = true;
	//allow chat clear
	const allow_clear = true;
	//store shouts in mysql
	const store_shouts = true;
	//perform live updates
	const live_updates = true;
	//registered user text color
	const reg_color = '#808000';
	//system error color
	const err_color = '#c00';
	//unregistered user text color
	const guest_color ='#C9FCF7';
	//system success color
	const success_color = '#060';
	//allowing user logins
	const allow_login = true;
	//system enabled
	const enabled = true;
	//allow ping
	const allow_ping = true;
	//allow nslook
	const allow_nslook = false;
	//allow command line switches
	const allow_switches = true;
	//flood time out
	const flood_timeout = 0;
	//must authenticate to see shouts
	const auth_shout = false;
	//sql query for users [v3]
	const v3_msg_query = "SELECT * FROM jshout ORDER BY id DESC LIMIT 5";
	//hide system messages [v3]
	const hide_sys_messages = false;
	//must auth for shouting [v3]
	const must_auth = false;
}

?>
