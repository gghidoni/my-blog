<?php 

// redirect uri request -> controllers file


$router->get('', 'controllers/index.php');
$router->post('new-comment', 'controllers/new-comment.php');
$router->get('post', 'controllers/single-post.php');
$router->get('login', 'controllers/login-page.php');
$router->post('new-author', 'controllers/new-author.php');
$router->post('login-author', 'controllers/login-author.php');
$router->get('logout', 'controllers/logout.php');
$router->post('new-post', 'controllers/new-post.php');


