<?php

define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
	die('Could not connect:'. mysql_error());
}

$db_selected = mssql_select_db(DB_NAME, $link);
if(!$db_selected){
	die('Can\'t use' . DB_NAME . ':' . mysql_error());
}

echo 'Connected succesfully';

$value = $_POST['input1'];

$sql = "INSERT INTO hybec (body_color) VALUES ('$value')"; 

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}



	
mysql_close();
?>