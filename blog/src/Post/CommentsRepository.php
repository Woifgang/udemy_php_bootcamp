<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 09.03.2018
 * Time: 19:55
 */

namespace App\Post;
use PDO;
use App\Core\AbstractRepository;

class CommentsRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "comments";
    }

    public function getModelName()
    {
        return"App\\Post\\CommentModel";
    }

    function allByPost($id)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE `post_id` = :id");
        $stmt->execute(['id'=>$id]);
        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);
        return $comments;
    }

}