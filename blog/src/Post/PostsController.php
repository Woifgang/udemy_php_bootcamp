<?php

namespace App\Post;

class PostsController
{
    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    protected function render($view, $params)
    {

        // foreach ($params as $key => $value) 
        // {
        //    ${$key} = $value;
        // }
        
        extract($params);

        include __DIR__ . "/../../views/{$view}.php";
    }

    public function index()
    {
        $posts = $this->postsRepository->fetchPosts();

        $this->render("post/index", [
            'posts' => $posts
        ]);
        
    }

    public function post()
    {
        $id = $_GET['id'];
        $post = $this->postsRepository->fetchPost($id);

        $this->render("post/show", [
            'post' => $post
        ]);
    }
}

?>