<?php
require_once 'DataBase.class.php';
require_once 'config.php';

$MySQL = new DataBase($db_host, "events");
$data = array($_GET['start'],
	$_GET['end'],
	$_GET['date'],
	$_GET['title'],
	$_GET['description'],
	$_GET['color']
);

//
// MySQL date format is an 8 digit integer YYYYMMDD
//

print_r(
	$MySQL
		->connect($db_user, $db_pass)
		->setDay($data)
		->disconnect();
?>
