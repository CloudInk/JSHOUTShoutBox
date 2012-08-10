<?php
require_once ("js_v3.php");
if (is_array ( $_POST )) {
		$js = new jShout ( $_COOKIE ['jShout'], $_POST );
}	
?>
