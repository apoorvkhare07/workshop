<?php
include 'connection.php';
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = htmlspecialchars($_POST['post_title']);
    $content = htmlspecialchars($_POST['content']);
    $author = htmlspecialchars($_POST['author']);
    $sql = "INSERT INTO blog_post(post_title, content, author, posted_on) values('".$title."','".$content."','".$author."','".date('Y/m/d')."');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: http://localhost/workshop/blog.php');
    $conn->close();
}
else{
    echo "Request method not supported";
}

?>