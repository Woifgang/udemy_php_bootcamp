<?php

namespace App\Post;

use ArrayAccess;

class PostModel implements ArrayAccess
{
    public $id;
    public $title;
    public $content;

    public function offsetExists($offset)
    {
        return isset($this->offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        return $this->offset = $value;
    }

    public function offsetUnset($offset)
    {
        return $this->offset;
    }


}



?>