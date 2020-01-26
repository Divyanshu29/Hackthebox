<?php
	$db_connection = pg_connect("host=localhost port=5432 dbname=profiles user=profiles password=profiles");
	$result = pg_query($db_connection,"SELECT * from profiles");
	$res=pg_fetch_all($result);
	print_r($res);
?>
