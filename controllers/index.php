<?php 

// al caricamento della index viene settata la query con metodo selectAll(), tabella posts
// $app['database'] è una nuova istanza di QueryBuilder con PDO settato
$posts = $app['database']->selectAll('posts');
$authors = $app['database']->selectAll('authors');
$listPosts = $app['database']->listPosts();








require 'views/index.view.php';