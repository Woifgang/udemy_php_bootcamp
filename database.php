<?php

  $pdo = new PDO(
    'mysql:host=localhost; dbname=blog; charset=utf8',
     'blog',
      'hXawUvuB3YTtZAu9');

  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Schutz vor SQL angriff

  function fetch_posts()
  {
    global $pdo;
    return  $pdo->query("SELECT * FROM `posts`");
  }


function fetch_post($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id ");
  $stmt->execute(['id'=>$id]);
  return $stmt->fetch();

  /*
  $q = $pdo->query("SELECT * FROM `posts` WHERE title='{$title}'");
  return $q->fetch();
  */
}
?>
