<?php

namespace App\Post;

use PDO;

class PostsRepository
{

    private $pdo;

    public function __contruct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchPosts()
    {
        //global $pdo;
     //   return  $pdo->query("SELECT * FROM `posts`");
        return $this->pdo->query("SELECT * FROM `posts`");
    }


    function fetchPost($id)
    {
    $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id ");
    $stmt->execute(['id'=>$id]);
    return $stmt->fetch();
    }
}



?>
