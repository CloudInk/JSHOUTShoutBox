<?php
require_once ("js_v3.php");
$shoutbox = new jShout ( $_COOKIE ['jShout'] );
$query[1]= "DROP TABLE IF EXISTS `jshout`";
$query[2]= "CREATE TABLE jshout (
  id int(11) NOT NULL AUTO_INCREMENT,
  shout longblob,
  stamp timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  user varchar(255) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1";
$query[3]= "INSERT INTO jshout VALUES ('7', 0x4572726F722067657474696E6720646174612061727261792E, '2012-08-09 11:05:59', 'j-Shout', '0')";
$query[4]= "DROP TABLE IF EXISTS jshout_private";
$query[5]= "CREATE TABLE jshout_private (
  id int(11) NOT NULL AUTO_INCREMENT,
  `msg` blob,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `stamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1";
$query[6]= "DROP TABLE IF EXISTS jshout_stats";
$query[7]= "CREATE TABLE jshout_stats (
  count int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (count)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS jshout_user";
$query[8]= "CREATE TABLE jshout_user (
  id int(11) NOT NULL AUTO_INCREMENT,
  user varchar(255) DEFAULT NULL,
  pass varchar(255) DEFAULT NULL,
  auth varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1";
$query[9]= "DROP TABLE IF EXISTS jshout_v3";
$query[10]= "CREATE TABLE jshout_v3 (
  id int(11) NOT NULL AUTO_INCREMENT,
  shout longblob,
  stamp timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  user varchar(255) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1";

foreach($query as $q) {
	$result = mysql_query ( $q ) or die ( '<p>Query: <br><tt>' . $q . '</tt><br>failed. MySQL error: ' . mysql_error () );
if (mysql_affected_rows () > 0) {
	print ("$q ok!<BR>") ;
} else {
	print ("$q failed!<BR>") ;
}
}


?>
