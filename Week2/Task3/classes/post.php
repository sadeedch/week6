<?php
namespace wad;
//this class post is the blue print of the post having user, message, image and date.
include "comment.php";
class Post{
    protected $user;
    protected $message;
    protected $image;
    protected $date;

    protected $comments;
  
    // contructor is the function which will be called when we create the instance of this class. (when we call the post object).
    function __construct($user, $message, $image, $date) {
        $this->user = $user;
        $this->message = $message;
        $this->image = $image;
        $this->date = $date;

        $this->comments = [];

    } 
    //to access the user name
    function getUser(){
        return $this->user;
    }
    //to access the user message
    function getMessage(){
        return $this->message;
    }
    //to access the user image
    function getImage(){
        return $this->image;
    }
    //to access the date of the post
    function getDate(){
        return $this->date;
    }   
    // comments accessor
    function getComment(){
        return $this->comments;
    }   

    function addComment($user, $comment){
        $this->comments[] = new Comment ($user,$comment);
    }  
}


?>