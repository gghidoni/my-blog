<?php 


// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'names' => 'controllers/add-name.php',
//     'post' => 'controllers/single-post.php',
//     'new-comment' => 'controllers/new-comment.php'

// ]);



$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->post('new-comment', 'controllers/new-comment.php');
$router->get('post', 'controllers/single-post.php');
$router->post('names', 'controllers/add-name.php');

