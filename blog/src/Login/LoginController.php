<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 21.03.2018
 * Time: 18:58
 */

namespace App\Login;


use App\Core\AbstractController;

class LoginController extends AbstractController
{
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard()
    {
        $this->loginService->check();

        $this->render("dashboard/dashboard",[]);
    }

    public function logout()
    {
        $this->loginService->logout();
        header("Location: login");
    }

    public function login()
    {
        $error = false;

        if (!empty($_POST['username']) AND !empty($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->loginService->attempt($username,$password))
            {
                header("Location: dashboard");
                return;
            } else{
                $error = true;
            }
        }

        $this->render("login/login",[
            'error' => $error
        ]);
    }

}

