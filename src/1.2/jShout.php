<?php
require_once ("jShout_receiver.php");

if (is_array ( $_POST )) {
	$shoutbox = new jShout ( $_COOKIE ['jShout'], $_POST );
}

?>
