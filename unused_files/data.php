<?php
$con = mysql_connect(//db_host, db_username, db_password);
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
mysql_select_db(//db_username, $con);

$callback = '';
if (isset($_GET['callback']))
{
	$callback = filter_var($_GET['callback'], FILTER_SANITIZE_STRING);
}

$data = mysql_query("SELECT DISTINCT cid FROM Table1");
$cids = array();
while($result = mysql_fetch_array($data))
	{
		$cids[] = $result[0];
		echo $callback . '('.json_encode($cids).');';
	}
?>