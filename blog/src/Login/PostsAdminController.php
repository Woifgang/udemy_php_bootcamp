<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 22.03.2018
 * Time: 20:16
 */

namespace App\Login;


use App\Core\AbstractController;
use App\Post\PostsRepository;


class PostsAdminController extends AbstractController
{


    public function __construct(LoginService $loginService, PostsRepository $postsRepository)
    {
        $this->loginService = $loginService;
        $this->postsRepository = $postsRepository;
    }

    public function showPostEdit()
    {
        //Passwortschutz
        $this->loginService->check();

        //Datenbankabfrage
        $editPosts = $this->postsRepository->all();

        //Liste Ausgeben
        $this->render("dashboard/posts-admin", [
            'editPosts' => $editPosts
        ]);
    }

    public function editPost()
    {
        $this->loginService->check();

        $id = $_GET['id'];

        $editPost = $this->postsRepository->find($id);

        $this->render("dashboard/edit-post", [
            'editPost' => $editPost
        ]);
    }
}