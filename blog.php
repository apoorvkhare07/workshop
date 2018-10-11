<html> 
<head>
<link rel="stylesheet" href="blog.css">
</head>
<body>

<?php

include 'connection.php';
$sql = 'SELECT * FROM blog_post order by posted_on DESC;';
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo '<h1>'.$row['post_title'].'</h1>';
    }
}

?>

<a href='add_blog.html'> add blog</a>
</body>
</html>