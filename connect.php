<?php
$db_connection = mysql_connect("localhost:3306", "test", "test");
echo $db_connection->connection_status;
?>