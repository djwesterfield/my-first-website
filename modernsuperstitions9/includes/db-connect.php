<?php
	
	/* session */
	session_start();
	
	/* admin user/pass */
	$ADMIN_USER = '%admin_user%';
	$ADMIN_PASS = '%admin_pass%';
	$ADMIN_EMAIL = '%admin_email%';
	
	/* database connectivity settings */
	$DATABASE_HOST = '%db_host%';			//usually 'localhost'
	$DATABASE_USER = '%db_user%';
	$DATABASE_PASS = '%db_pass%';
	$DATABASE_NAME = '%db_name%';
	
	if(substr_count($DATABASE_HOST.$DATABASE_HOST.$DATABASE_HOST.$DATABASE_HOST,'%')) { header('Location:install.php'); exit(); }
	
	/* connect */
	$DATABASE_LINK = mysql_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS);
	mysql_select_db($DATABASE_NAME,$DATABASE_LINK);
	
?>
