<html> 
<body>

<?php

include 'connect.php';
$result = mysql_query($db_connection, " SELECT * FROM blog_post ; ");

while($row = mysql_fetch_array($result)){

?>
<p><?php echo $row["post_title"];?></p>
<p> by <?php echo $row["author"];?> on <?php echo $row["posted_on"];?></p>
<p><?php echo $row["content"]; ?></p>
<?php } ?>

<a href='add_blog.php'> add blog</a>
</body>
</html>