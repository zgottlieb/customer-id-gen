<?php
$con = mysql_connect("db417658083.db.1and1.com","dbo417658083", "Zachpass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db417658083", $con);
$customer_id = $_GET['CID'];
mysql_query("INSERT INTO Table1 (cid) VALUES ('$customer_id')");

?>