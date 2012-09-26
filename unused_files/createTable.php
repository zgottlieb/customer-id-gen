<?php
mysql_connect("db417658083.db.1and1.com","dbo417658083", "Zachpass") or die('Could not connect: ' . mysql_error());

mysql_select_db("db417658083");

mysql_query("CREATE TABLE visitLog(
	index INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(index), 
	cid INT, 
	ip VARCHAR(15), 
	time VARCHAR(15))")
	or die(mysql_error());
	
	echo "Table Created";

mysql_close($con);
?>