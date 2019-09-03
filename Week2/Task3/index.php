 
<?php
    include 'classes/postSeeder.php';
    $posts =  wad\PostSeeder::seed();
    $posts[0]->addComment("Bob","Nice post"); 
    $posts[0]->addComment("Fred","Yes!!"); 
    $posts[1]->addComment("Fred","No!!!");
    $posts[1]->addComment("Fred","Yeah!Nah!!!"); 
    //var_dump($posts);
    //exit;

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
                    <img src = " <?= $post->getImage() ?>" width="50" height="50" alt="user image" ><br>
                    <b><?= $post->getUser() ?> <br></b>
                    <?= $post->getMessage() ?> <br>
                    <?= $post->getDate() ?> <br> 
                    <b>Comments:</b> <br>
                    <?php $comments =  $post->getComment(); ?> 
                    <?php foreach($comments as $comment) { ?>
                    <?= $comment->getUser() ?> said  <?= $comment->getComment()  ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </body>
</html>

