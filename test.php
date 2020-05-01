<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<?php
	$db_server = "140.120.182.152";
	$db_name = "snake";
	$db_user = "bastu";
	$db_passwd = "123456";

	$db = mysqli_connect($db_server,$db_user,$db_passwd,$db_name);
	if(mysqli_connect_errno($db))
		echo "connect failed.." . mysqli_connect_error();

		mysqli_set_charset($db,'utf-8');

		if(!@mysqli_select_db($db,'snake'))
			die("can`t use database");
?>