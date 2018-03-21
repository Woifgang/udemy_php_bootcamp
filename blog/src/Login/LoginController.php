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



    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function login()
    {
        $error = NULL;

        if (!empty($_POST['username']) AND !empty($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->loginRepository->findByUsername($username);
            //var_dump($user);

            if (!empty($user))
            {
                if (password_verify($password, $user->password))
                {
                    echo "Login erfolgreich";
                    die();
                }else{
                    $error = "Passwort stimmt nicht";
                }

            }else{
                $error = "Benutzer nicht gefunden";
            }
        }

        $this->render("login/login",[
            'error' => $error
        ]);
    }

}

