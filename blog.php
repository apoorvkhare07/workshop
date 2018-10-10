<html> 
<body>

<?php
$db_connection = mysql_connect("host=localhost port=5432 dbname=workshop user=test");

$result = mysql_query($db_connection, " SELECT * FROM blog_post ; ");

while($row = mysql_fetch_array($result)){

?>
<p><?php echo $row["post_title"];?></p>
<p> by <?php echo $row["author_name"];?> on <?php echo $row["post_date"];?></p>
<p><?php echo $row["content"]; ?></p>
<?php } ?>

</body>
</html>