<?php
namespace wad;
class Comment{
    protected $user;
    protected $comments;
  
    // contructor is the function which will be called when we create the instance of this class. (when we call the post object).
    function __construct($user, $comments) {
        $this->user = $user;
        $this->comments = $comments;

    } 
    //to access the user name
    function getUser(){
        return $this->user;
    }
    
    // comments accessor
    function getComment(){
        return $this->comments;
    }   
 
}


?>