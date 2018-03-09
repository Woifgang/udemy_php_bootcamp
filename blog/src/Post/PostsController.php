<?php

namespace App\Post;

use App\Core\AbstractController;

class PostsController extends AbstractController
{
    private $postsRepository;
    private $commentsRepository;

    public function __construct(PostsRepository $postsRepository, CommentsRepository $commentsRepository)
    {
        $this->postsRepository = $postsRepository;
        $this->commentsRepository = $commentsRepository;
    }

    

    public function index()
    {
        $posts = $this->postsRepository->all();

        $this->render("post/index", [
            'posts' => $posts
        ]);
        
    }

    public function post()
    {
        $id = $_GET['id'];
        $post = $this->postsRepository->find($id);
        $comments = $this->commentsRepository->allByPost($id);

        $this->render("post/show", [
            'post' => $post,
            'comments' => $comments,
        ]);
    }


}

?>