<?php 



$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->post('new-comment', 'controllers/new-comment.php');
$router->get('post', 'controllers/single-post.php');
$router->get('login', 'controllers/login-page.php');
$router->post('new-author', 'controllers/new-author.php');


