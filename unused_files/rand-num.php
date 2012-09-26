<?php
	$callback = '';
	if (isset($_GET['callback']))
	{
		$callback = filter_var($_GET['callback'], FILTER_SANITIZE_STRING);
	}
	$r_num=rand();
	
	echo $callback . '('.json_encode($r_num).');';
	
?>