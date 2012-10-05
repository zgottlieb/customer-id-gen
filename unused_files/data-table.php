<?php
$con = mysql_connect(//db_host, db_username, db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db(//db_username, $con);

//shows SQL table data

$data = mysql_query("SELECT * FROM Table1");

while($row = mysql_fetch_array($data))
  {
 echo $row['index'] . " " . $row['cid'] . " " . $row['url'];
 echo "<br />";
  }

mysql_close($con);

?>