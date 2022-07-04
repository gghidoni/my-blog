<?php 

session_start();

// get all posts list
$listPosts = $app['database']->listPosts();




require 'views/index.view.php';