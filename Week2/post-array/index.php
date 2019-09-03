
<?php
    $posts = array();
    $posts[] =  array(
        'name' => 'Bob',
        'message' => 'Hello',
        'image' => 'images/user.jpeg', 
        'date' => '01/01/2019'
    );
    $posts[] =  array(
        'name' => 'John',
        'message' => 'Today is a good day',
        'image' => 'images/user.jpeg', 
        'date' => '02/05/2019'
    );
    $posts[] =  array(
        'name' => 'Fred',
        'message' => 'Cold day',
        'image' => 'images/user.jpeg', 
        'date' => '11/07/2019'
    );
    //var_dump($posts); 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div id="content">
        <h1> Social Media </h1>
            <?php foreach($posts as $post) { ?>
                <div id = "post"> 
                    <img src = " <?= $post['image'] ?>" width="50" height="50" alt="user image" > <br>
                    <b><?= $post['name'] ?> <br></b>
                    <?= $post['message'] ?> <br>
                    <?= $post['date'] ?> <br>
                </div>
            <?php } ?>
        </div>
    </body>
</html>

