<?php
namespace wad;
use wad\Post;
include 'post.php';

//this class postSeeder will be used to create the content.
class PostSeeder{
    public static function seed (){
        $posts = [];
        $posts [] =  new Post("Bob","Hello","images/user.jpeg","1/01/2019");
        $posts [] =  new Post("John","Its a good day","images/user.jpeg","15/01/2019");
        $posts [] =  new Post("Fred","No message","images/user.jpeg","17/02/2019");
        return $posts;
    }

}



?>