<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 09.03.2018
 * Time: 19:59
 */

namespace App\Post;


use App\Core\AbstractModel;

class CommentModel extends AbstractModel
{
    public $id;
    public $content;
    public $post_io;

}