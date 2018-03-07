<?php
namespace App\Post;

use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{


    public function  getTableName(){
        return "posts";
    }

    public function  getModelName(){
        return "App\\Post\\PostModel";
    }

    /*
    function all()
    {
       $posts =  $this->abstractAll($this->pdo, 'posts', "App\\Post\\PostModel");
       return $posts;
    }


    function find($id)
    {
        $post = $this->abstractFind($this->pdo,'posts', "App\\Post\\PostModel", $id);
        return $post;

    }
    */
}

?>
