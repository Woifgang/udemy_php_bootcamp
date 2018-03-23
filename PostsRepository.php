<?php
namespace App\Post;

use PDO;
use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{


    public function  getTableName()
	{
        return "posts";
    }

    public function  getModelName()
	{
        return "App\\Post\\PostModel";
    }
	
	public function updatePost($postId, $title, $comment)
	{
		$table = $this->getTableName();
		$stmt = $this->pdo->prepare(
			"UPDATE $table SET title = :title , content = :content WHERE postId = :postId");
		);
		$stmt->execute([
			'title' => $title,
			'content' => $content,
			'postId' => $postId
		])
	}
}

?>
