<?php 

// index page controller

session_start();

// get all posts list
$listPosts = $app['database']->listPosts();

// get categories
$categories = $app['database']->getCategories();




require 'views/index.view.php';