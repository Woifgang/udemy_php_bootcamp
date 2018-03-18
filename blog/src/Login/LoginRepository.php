<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 18.03.2018
 * Time: 19:29
 */

namespace App\Login;

use PDO;
use App\Core\AbstractRepository;

class LoginRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "login";
    }

    public function getModelName()
    {
        return"App\\Login\\LoginModel";
    }

    public function findByUsername($username)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE username = :username ");
        $stmt->execute(['username'=>$username]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        $user = $stmt->fetch(PDO::FETCH_CLASS);

        return $user;
    }

}