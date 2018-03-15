<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 15.03.2018
 * Time: 20:39
 */


if (!isset($_COOKIE['count']))
{
    echo "Dies ist der erste Besuch";
    setcookie("count",1);
}
else {
    $_COOKIE['count'] = $_COOKIE['count'] + 1;
    echo "Dies ist der {$_COOKIE['count']} te Besuch";
    setcookie('count',$_COOKIE['count'] );
}


?>