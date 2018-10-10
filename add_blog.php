
<html
<body>

<form action=”insert.php” method=”post”>
<table>
<tr>
<td>Post Title :</td>
<td><input type=”text” id=”posttitle” name=”blogtitle”/></td>
</tr>

<tr>
<td>Content :</td>
<td><textarea id=”content” name=”content”></textarea></td>
</tr>
<tr>
<td>Author Name : </td>
<td><input type=”text” id=”authorname” name=”authorname”/></td>
</tr>
<tr>
<td></td>
<td align=”center”>
<input id=”submit” type=”submit” value=”Save”>
</td>
</tr>
</table>
</form>

</body>
</html>

<?php

$title = !empty($_POST['blogtitle']) ? $_POST['blogtitle'] : 'a';
$content = !empty($_POST['content']) ? $_POST['content'] : 'b';
$author = !empty($_POST['author_name']) ? $_POST['author_name'] : 'c';
$db_connection = mysql_connect("host=localhost port=5432 dbname=workshop user=test  ");
echo ($title.'hello') ;
$result = mysql_query($db_connection , " INSERT into blog_post (post_title, content, author_name, post_date) values( $title, $content,$author, now() )");
echo "1 record added";
mysql_close($db_connection);
?>
&nbsp;&nbsp;<a href='blog.php'> view blog</a>

</body>
</html>