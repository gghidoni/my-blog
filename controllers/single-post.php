<?php 

session_start();

$idPost = intval(preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']));

$singlePost = $app['database']->singlePost($idPost);
$tags = $app['database']->getTags($idPost);
$comments = $app['database']->getComments($idPost);




require 'views/single-post.view.php';
