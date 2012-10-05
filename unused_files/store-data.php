<?php
$con = mysql_connect(//db_host, db_username, db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db(//db_username, $con);
$customer_id = $_GET['CID'];
mysql_query("INSERT INTO Table1 (cid) VALUES ('$customer_id')");

?>