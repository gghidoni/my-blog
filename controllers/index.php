<?php 

// index page controller

session_start();

// get all posts list
$listPosts = $app['database']->listPosts();

// get categories for form
$categories = $app['database']->selectAll('categories');

// get all tags for form
$tags = $app['database']->selectAll("tags");






require 'views/index.view.php';