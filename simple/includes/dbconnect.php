<?php
	$dbuser='root';
	$dbpass='your_password';
	$dbhost='localhost';
	$dbname='HR';
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	mysql_select_db($dbname);
?>		
