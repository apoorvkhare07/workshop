<html>
<body>
    <?php
    echo $_POST['post_title'];
    include 'connect.php';
    echo $_POST['post_title'];
    $title = !empty($_POST['post_title']) ? $_POST['post_title'] : "a";
    // $content = !empty($_POST["content"]) ? $_POST["content"] : "a";
    // $author = !empty($_POST["author"]) ? $_POST["author"] : "c";
    // $db_connection = mysql_connect("host=localhost port=3306 dbname=workshop user=test password=test");
    echo $title."hello" ;
    $result = mysql_query($db_connection , " INSERT into blog_post (post_title, content, author, posted_on) values( $title, $content,$author, now() )");
    echo "1 record added";
    mysql_close($db_connection);
    ?>
</body>
</html>