<?php
	$dbuser='root';
	$dbpass='WinXP#1';
	$dbhost='localhost';
	$dbname='HR';
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	mysql_select_db($dbname);
?>		
