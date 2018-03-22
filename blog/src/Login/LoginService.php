<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 22.03.2018
 * Time: 19:23
 */

namespace App\Login;


class LoginService
{
    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function attempt($username, $password)
    {
        $user = $this->loginRepository->findByUsername($username);

        if (empty($user))
        {
            return false;
        }

        if (password_verify($password, $user->password))
        {
            $_SESSION['login'] = $user->username;
            session_regenerate_id(true);
            return true;
        }else{
            return false;
        }

    }

    public function logout()
    {
        unset($_SESSION['login']);
        session_regenerate_id(true);
    }

    public function check()
    {
        if (isset($_SESSION['login']))
        {
            return true;
        } else{
            header("Location: login");
            die();
        }
    }

}