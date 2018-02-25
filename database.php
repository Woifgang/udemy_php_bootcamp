<?php

  $pdo = new PDO(
    'mysql:host=localhost; dbname=blog; charset=utf8',
     'blog',
     'hXawUvuB3YTtZAu9');

  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Schutz vor SQL angriff

?>
