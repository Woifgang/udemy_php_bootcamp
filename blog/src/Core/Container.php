<?php

namespace App\Core;

use App\Login\LoginRepository;
use PDO;
use Exception;
use PDOException;
use App\Post\PostsRepository;
use App\Post\PostsController;
use App\Post\CommentsRepository;

class Container
{

    private $rezepte = [];
    private $instances = [];


    public function __construct()
    {
        $this->rezepte = [
            'postsController' => function()
            {
                return new PostsController(
                    $this->make("postsRepository"),
                    $this->make("commentsRepository")
                );
            },
           'postsRepository' => function()
           {
                return new PostsRepository(
                    $this->make("pdo")
                );
           },
            'commentsRepository' => function()
            {
                return new  CommentsRepository(
                    $this->make("pdo")
                );
            },
            'loginRepository' => function()
            {
                return new LoginRepository(
                    $this->make("pdo")
                );
            },
           'pdo' => function()
           {
            try{
                $pdo = new PDO(
                    'mysql:host=localhost; dbname=blog; charset=utf8',
                     'blog',
                     'hXawUvuB3YTtZAu9'
                    );         
            }catch(PDOException $e){
                echo "Verbindung zur Datenbank fehlgeschlagen";
                die();
            }
        
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Schutz vor SQL angriff
            return $pdo;
          
            
           } 
        ];
    }

    public function make($name)
    {
        if (!empty($this->instances[$name]))
        {
            return $this->instances[$name];
        }

        if (isset($this->rezepte[$name]))
        {
            $this->instances[$name] = $this->rezepte[$name]();
        }
        
        return $this->instances[$name];
    }

}

?>