<?php
	$username="root";
	$password="";
	$database="gcc";
 	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
;
	
	$conn = mysql_connect(localhost,root,$password);
	$dbcon = mysql_select_db($database);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}