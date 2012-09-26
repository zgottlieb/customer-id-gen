<?php
$con = mysql_connect("db417658083.db.1and1.com","dbo417658083", "Zachpass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db417658083", $con);

//shows SQL table data

$data = mysql_query("SELECT * FROM Table1");

while($row = mysql_fetch_array($data))
  {
 echo $row['index'] . " " . $row['cid'] . " " . $row['url'];
 echo "<br />";
  }

mysql_close($con);

?>