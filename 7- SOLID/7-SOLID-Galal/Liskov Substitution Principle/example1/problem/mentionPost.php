<?php
include_once "generalPost.php";
class mentionPost extends generalPost {
    public function createMentionPost($content)
    {
       return "Mention Post :$content";
    }
}


// PDO => crud
// Output Control buffering in php
// Routing in php