<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;
use App\Post\PostsController;

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
                    $this->make("postsRepository")
                );
            },
           'postsRepository' => function()
           {
                return new PostsRepository(
                    $this->make("pdo")
                );
           },
           'pdo' => function()
           {
            $pdo = new PDO(
                'mysql:host=localhost; dbname=blog; charset=utf8',
                 'blog',
                 'hXawUvuB3YTtZAu9'
                );            
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

    /*
    private $pdo;
    private $postsRepository;

    public function getPdo()
    {
        if(!empty($this->pdo))
        {
            return $this-pdo;
        }
        $this->pdo = new PDO(
            'mysql:host=localhost; dbname=blog; charset=utf8',
             'blog',
             'hXawUvuB3YTtZAu9');
        
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Schutz vor SQL angriff

        return $this->pdo;
    }

    public function getPostRepository()
    {
        if (!empty($this->postsRepository)) 
        {
            return $this->postsRepository;
        }
        $this->postsRepository =  new PostsRepository($this->getPdo());

        return $this->postsRepository;
    }
    */
}

?>